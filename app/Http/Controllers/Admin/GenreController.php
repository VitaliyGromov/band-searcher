<?php
declare(strict_types=1);
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Genre\GenreFilterRequest;
use App\Http\Requests\Genre\GenreFormRequest;
use App\Models\Genre;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class GenreController extends Controller
{
    public function index(GenreFilterRequest $request): View
    {
        $genres = Genre::filter($request->validated())->get();

        return view('admin.genres.index', compact('genres'));
    }

    public function store(GenreFormRequest $request)
    {
        //
    }

    public function update(GenreFormRequest $request, string $id)
    {
        //
    }

    public function destroy(Genre $genre): RedirectResponse
    {
        $genre->delete();

        return redirect()->back();
    }
}
