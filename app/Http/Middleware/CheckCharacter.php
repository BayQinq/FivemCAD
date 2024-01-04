<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\BqCharacter;
use Auth;

class CheckCharacter
{
    public function handle($request, Closure $next)
    {
        // Belirli route isimlerini tanımlayın
        $excludedRoutes = [
            'new-character',
            'profile',
            'post-character'
            // Diğer route isimlerini buraya ekleyin
        ];

        // Eğer kullanıcı giriş yapmışsa ve route ismi bu listeye dahil değilse kontrol et
        if (Auth::check() && !in_array($request->route()->getName(), $excludedRoutes)) {
            // Kullanıcının karakterlerini kontrol et
            $characterCount = BqCharacter::where('user_id', Auth::user()->id)->count();

            // Eğer karakter yoksa karakter oluşturma sayfasına yönlendir
            if ($characterCount === 0) {
                return redirect()->route('new-character');
            }
        }

        // Devam et
        return $next($request);
    }
}
