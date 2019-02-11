<?php



namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller{



    public function __construct() {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }










    public function  index() {
        $categories = Category::all();
        return view('categories.index', compact("categories"));

    }
    public function show($category){
        $category = Category::find($category);

        return view("categories.show", compact("category"));
    }


    public function create() {
        return view('categories.create');
    }

    public function store(CategoryRequest $request) {
        $formData = $request->all();

        Category::create($formData);

        return redirect('categories');


    }



    public function edit($category) {
        $category = Category::findOrFail($category);

        return view('categories.edit', compact("category"));
    }



    public function update(CategoryRequest $request, $category) {
        $formData = $request->all();
        $category = Category::findOrFail($category);
        $category->update($formData);

        return redirect('categories');
    }





}
