<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="flex flex-col md: flex-row justify-between items-center">
<div class="w-24 h-24">
<a href=""><img src=""></a>
</div>
<ul class="flex flex-col md: flex-row items-center mb-3 md:mb-0">
@auth
<li class="md:mr-5 py-2 md:py-0"><a href="" class="hover: text-green-
400">Les missions</a></li>
<li class="md:mr-5 py-2 md:py-0"><a href="" class="hover: text-green-
400">Mes conversations</a></li>
<li class="md:mr-5 py-2 md:py-0"><a href="" class="hover: text-green-
400">Mon compte</a></li>
<li class="md:mr-5 py-2 md:py-
0"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.g
etElementById('logout-form').submit();" class="hover:text-green-
400 ">Se déconnecter</a></li>
form" action="{{ route('logout') }}" method="POST" style="display: none;
<form id="logout-
@csrf
</form>
@else
<li class="md:mr-5 py-2 md:py-0"><a href="" class="hover: text-green-
400">Se connecter</a></li>
<li class="md:mr-5 py-2 md:py-0"><a href="" class="hover: text-green- 400">S'enregistrer</a></li> @endauth
</ul>
</div>
</body>
</html>