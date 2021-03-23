<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExtrasRequest;
use App\Models\Extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
{

    public function editExtras (Extra $extra) {
        return view('extrasEdit', compact('extra'));
    }

    public function registro (ExtrasRequest $request) {
        Extra::create([
            'descripcion_extra' => $request->extras
        ]);
        return back();
    }

    public function update (ExtrasRequest $request, Extra $extra) {
        Extra::where('id', $extra->id)->update([
            'descripcion_extra' => $request->extras
        ]);
        return redirect('extras');
    }

    public function destroy ($id) {
        Extra::destroy($id);
        return back();
    }
}
