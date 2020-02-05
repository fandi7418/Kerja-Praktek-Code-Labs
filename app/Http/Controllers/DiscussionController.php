<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiscussionRequest;
use App\Http\Controllers\Controller;
use Illuminate\SUpport\Facades\DB;
use App\Discussion;
use Auth;

class DiscussionController extends Controller
{
    public function store(DiscussionRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

        Discussion::create($data);

        return redirect('/product/' . $request->get('product_id'));
    }
    public function show()
    {
        $discussions = DB::table('discussions')->get();
        return view('admin.diskusi.show', ['discussions' => $discussions]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = DB::table('discussions')->select('*')->where('id', '=', $id)->delete();

        return redirect('/admin/diskusi/show');
    }
}
