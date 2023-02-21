<?php

namespace App\Http\Controllers;

use App\Models\Phrase;
use Illuminate\Http\Request;


/**
 * Class PhraseController
 * @package App\Http\Controllers
 */
class PhraseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

         /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $phrases = Phrase::paginate(2);

        return view('phrase.index', compact('phrases'))
            ->with('i', (request()->input('page', 1) - 1) * $phrases->perPage());

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $phrase = new Phrase();
        return view('phrase.create', compact('phrase'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Phrase::$rules);

        $phrase = Phrase::create($request->all());

        return redirect()->route('phrase.index')
            ->with('success', 'Phrase created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $phrase = Phrase::find($id);

        return view('phrase.show', compact('phrase'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phrase = Phrase::find($id);

        return view('phrase.edit', compact('phrase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Phrase $phrase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phrase $phrase)
    {
        request()->validate(Phrase::$rules);

        $phrase->update($request->all());

        return redirect()->route('phrase.index')
            ->with('success', 'Phrase updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $phrase = Phrase::find($id)->delete();

        return redirect()->route('phrase.index')
            ->with('success', 'Phrase deleted successfully');
    }
}
