<?php

namespace App\Http\Controllers;
use App\Models\portfolio;
use App\Models\services;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function form()
    {
        return view('admin.portfolioform'); 
    }
   public function Pform(request $request)
    {
    
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);
        $img=time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $img);

        portfolio::create([
            'name' => $request->name,
            'image' => $img,
            'description' => $request->description,
        ]);


        return redirect()->route('admin.tableport')->with('success', 'Portfolio item created successfully.');
    }
    public function formservices(){
        return view('admin.formservices');
    }
    public function services(Request $request)
{
    $request->validate([
        'name' => 'required',
        'description' => 'required',
    ]);

    services::create([
        'name' => $request->name,
        'description' => $request->description,
    ]);
    return redirect()->route('admin.tableserv')->with('success', 'Service item created successfully.');
}
     public function table(){
        $show=portfolio::all();
    return view('admin.tableport', compact('show'));}
    public function dashboard(){
        return view('admin.dashboard');     
}
public function destroy($id)
{
    $portfolio =portfolio::findOrFail($id);
    $portfolio->delete();

    return redirect()->back()->with('success', 'portfolio deleted successfully.');
}
    public function create()
    {
        return view('admin.edit'); // Your Blade file for create/edit form
    }

    // Store new portfolio item
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|image|max:2048', // max 2MB
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
        } else {
            $path = null;
        }

        Portfolio::create([
            'image' => $path,
            'name' => $validated['name'],
            'description' => $validated['description'] ?? '',
        ]);

        return redirect()->route('admin.portfolioform.create')->with('success', 'Portfolio created successfully!');
    }

    // Show form to edit existing portfolio item
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.Editport', compact('portfolio'));
    }

    
    // Update portfolio
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|max:2048',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($portfolio->image && file_exists(public_path('images/' . $portfolio->image))) {
                unlink(public_path('images/' . $portfolio->image));
            }

            // Save new image
            $imgName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imgName);

            $portfolio->image = $imgName;
        }

        $portfolio->name = $validated['name'];
        $portfolio->description = $validated['description'];
        $portfolio->save();

        return redirect()->route('admin.tableport')->with('success', 'Portfolio updated successfully.');
    }
    public function tableserv(){
        $show=services::all();
    return view('admin.tableserv', compact('show'));}

    public function servedit($id)
    {
        $services = services::findOrFail($id);
        return view('admin.servedit', compact('services'));
    }
    public function servupdate(Request $request, $id)
    {
        $services = services::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
           
            'description' => 'required|string',
        ]);
        
        $services->name = $validated['name'];
        $services->description = $validated['description'];
        $services->save();

        return redirect()->route('admin.tableserv')->with('success', 'Service updated successfully.');

}
public function  contact(){
    return view(contact);
}
public function delete($id)
{
    $services =services::findOrFail($id);
    $services->delete();

    return redirect()->back()->with('success', 'service deleted successfully.');
}

}