<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NodeRequest;
use App\Node;
use App\Comment;



class NodeController extends Controller
{
  function index()
  {
      $nodes = Node::latest()->get();
      return view('node.index', compact('nodes'));
  }

  /**
   * Display the specified resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function show(Node $node)
  {
    return view('node.view', compact('node'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('node.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(NodeRequest $request)
  {
    $data = $request->only(['title', 'body']);
    $data['status'] = 1;
    Node::create($data);
    return redirect('/node');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }

}
