<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Rules\PersianCharacters;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'nickname' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255',new PersianCharacters],
            'lastname' => ['required', 'string', 'max:255',new PersianCharacters],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $adjectives = ['Red', 'Green', 'Blue', 'Yellow', 'Purple', 'Orange'];
        $nouns = ['Dog', 'Cat', 'Bird', 'Fish', 'Lion', 'Tiger', 'Bear'];

        // Generate a random username by concatenating an adjective, a noun, and a random number
        $username = $adjectives[array_rand($adjectives)] . $nouns[array_rand($nouns)] . rand(100, 999);

        // Check if the generated username already exists in the database
        while (User::where('username', $username)->exists()) {
            // If it exists, regenerate the username
            $username = $adjectives[array_rand($adjectives)] . $nouns[array_rand($nouns)] . rand(100, 999);
        }

        // Return the generated username


        $user = User::create([
            'nickname' => $request->nickname,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'username'=> $username,
            'phonenumber' => 'test',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
