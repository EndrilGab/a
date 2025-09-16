<x-app-layout>
<h2>Teste</h2>
{{ Auth::user()->saldo ?? 'Saldo não disponível' }}

</x-app-layout>