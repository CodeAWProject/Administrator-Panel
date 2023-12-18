<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\InvoiceTemplate;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Session;

class SettingController extends Controller
{
    public function settings(User $user)
    {
        return view('settings.index', ['user' => auth()->user()]);
    }

    public function editChangePassword(User $user)
    {
        return view('settings.account.change_password');
    } 

    public function updatePassword(Request $request, User $user)
    {
         $request->validate([
            'current_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'       
        ]);

        $current_user = auth()->user();

        if(Hash::check($request->current_password, $current_user->password)) {
            $current_user->update([
                'password' => bcrypt($request->password)
            ]);

            return redirect()->route('settings');
        } else {
            return redirect()->back();
        }
    }

    public function editChangeEmail(User $user) {
        return view('settings.account.change_email');
    }

    public function updateEmail(Request $request, User $user)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'confirm_email' => 'required|same:email'
        ]);

        $current_user = auth()->user();

        $current_user->update($credentials);

        return redirect()->route('user.show', $user);
    }

    public function editUsername(User $user) {
        return view('settings.account.change_username');
    }

    public function updateUsername(Request $request, User $user) 
    {
        
        $credentials = $request->validate([
            'name' => 'required'
        ]);

        $current_user = auth()->user();

        $current_user->update($credentials);

        return redirect()->route('user.show', $user);
        
    }

    public function invoiceTemplates()
    {

        return view('settings.invoice_templates.index', ['invoiceTemplates' => InvoiceTemplate::all()]);
    }

    public function changeInvoiceTemplate(string $id)
    {

        $invoiceTemplate = InvoiceTemplate::find($id);
        return view('settings.invoice_templates.edit', ['invoiceTemplate' => $invoiceTemplate]);
    }

    public function updateInvoiceTemplate(Request $request, Company $company)
    {

        $validatedData = $request->validate([
            'invoice_template_id' => 'required',       
        ]);

        auth()->user()->company()->update($validatedData);

        return redirect()->route('invoice_templates');
    }


    public function taskIndexTokens()
    {
        return view('settings.tasks_api.index');
    }

    public function taskGetTokens(Request $request)
    {
        $response = Http::post('http://localhost/APICoursePHP/todolistAPI/api/login.php', [
            'username' => 'john',
            'password' => 'secret',
        ]);

        $arr = $response->json();
        $accessToken = $arr["access_token"];
        $refreshToken = $arr["refresh_token"];
        
        $request->session()->push('access_token',  $accessToken);
        $request->session()->push('refresh_token',  $refreshToken);

        return redirect()->route('tokens');
    }

}
