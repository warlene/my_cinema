<h1>Hello World {{$couleur}}</h1>
@if ($couleur == 'rose')
      <h2>Color is Rose!</h2>
    @elseif ($couleur == 'bleu')
     <h2>Color is Blue!</h2>
    @else
    <h2>Color isn't Rose or Blue!</h2>
    @endif
    @isset($couleur)
      <h2>{{$couleur}} is define!</h2>
    @endisset
