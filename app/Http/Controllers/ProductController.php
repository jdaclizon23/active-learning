<?php

namespace App\Http\Controllers;

use App\Mail\ProductMail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
	public function index()
	{
		$products = Product::paginate(10);


		return view('modules.product.index')->with(['products' => $products]);
	}

	public function create()
	{
		return view('modules.product.create');
	}

	public function store(Request $request)
	{
		try {
			$dataReq = Validator::make($request->all(), [
				'description' => 'required',
				'size'        => 'required',
				'price'       => 'required|numeric|between:1,100000',
			]);

			if ($dataReq->fails()) {
				return redirect()->back()
					->with('toast_error', 'Errors')
					->withInput()
					->withErrors($dataReq->errors());
			}

//			$product = new Product($dataReq->validated());

			$product = Product::firstOrCreate($dataReq->validated());


			Mail::send(new ProductMail($product));

			if($product->wasRecentlyCreated){
				return redirect()->back()->with('toast_success', 'Product added successfully');
			}else {
				return redirect()->back()
					->withInput()
					->with('toast_error', 'Product already exist.' ,'Error');
			}
		} catch (\Exception $exception) {
			return redirect()->back()->withErrors($exception->getMessage());

		}
	}

	public function show(Product $product)
	{
		$response = [
			'product'    => $product,
			'isEditable' => false,
		];

		return view('modules.product.view-update')->with($response);
	}

	public function edit(Product $product)
	{
		$response = [
			'product'    => $product,
			'isEditable' => true,
		];

		return view('modules.product.view-update')->with($response);
	}

	public function update(Request $request, Product $product)
	{

		try {
			$dataReq = Validator::make($request->all(), [
				'id'          => 'exists:products,id',
				'description' => 'required',
				'size'        => 'required',
				'price'       => 'required|numeric|between:1,100000',
			]);
			if ($dataReq->fails()) {
				return redirect()->back()
					->with('toast_error', 'Error')
					->withErrors($dataReq->errors());
			}

			$product->update($dataReq->validated());


			return redirect()
				->back()
				->with('toast_success', 'Product record updated successfully');

		} catch (\Exception $exception) {
			return $exception->getMessage();
		}
	}

	public function destroy(Product $product)
	{
		$product->delete();

		return redirect()->back()
			->with('toast_success', 'Delete successfully');
	}
}
