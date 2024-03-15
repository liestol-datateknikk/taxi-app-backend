<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

include_once(app_path() . '/swagger_annotations.php');

class UserController extends Controller
{
    public function create(Request $request)
    {
        createUserSwaggerAnnotation();
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return response()->json(['message' => 'User created successfully'], 201);
    }

    public function get(Request $request, $id)
    {
        getUserByIdSwaggerAnnotation();

        $user = User::findOrFail($id);
        return response()->json(['user' => $user], 200);
    }

    public function update(Request $request, $id)
    {
        updateUserByIdSwaggerAnnotation();

        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password' => 'nullable|string|min:8',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->has('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->save();

        return response()->json(['message' => 'User updated successfully'], 200);
    }

    public function delete(Request $request, $id)
    {
        deleteUserByIdSwaggerAnnotation();
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}
