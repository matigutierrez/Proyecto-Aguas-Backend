<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use JWTAuth;
use App\Usuario;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
  public function authenticate(Request $request) {
		$credentials = $request->only('nombre_usu', 'password');
		try {
			if (! $token = JWTAuth::attempt($credentials)) {
				return response()->json(['error' => 'invalid_credentials'], 401);
			}
		} catch (JWTException $e) {
			return response()->json(['error' => 'could_not_create_token'], 500);
		}
		return response()->json(['token' => 'Bearer ' . $token, 'nombre_usu' => $request->nombre_usu]);
	}

	public function getAuthenticatedUser()
  {
    try {
      if (! $user = JWTAuth::parseToken()->authenticate()) {
        return response()->json(['user_not_found'], 404);
      }
    } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
      return response()->json(['token_expired'], $e->getStatusCode());
    } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
      return response()->json(['token_invalid'], $e->getStatusCode());
    } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
      return response()->json(['token_absent'], $e->getStatusCode());
    }
    return $user;
  }

  public function getURLToken() {
    $usuario = $this->getAuthenticatedUser();
    $token = bin2hex(gzdeflate(encrypt($usuario->nombre_usu)));
    $encriptado = bin2hex(gzdeflate(encrypt($usuario->nombre_usu)));
    return ['token' => $encriptado];
  }

}
