<<<<<<< Updated upstream
<div class="section top has-background spaced" style="background-image: url('/img/backgrounds/soon.gif')" @click.prevent="scrollTo('#about')" id="{{isset($id) ? $id : 'hero'}}">
    @include('global.header')
=======
<div class="item top has-background spaced" style="background-image: url('/img/backgrounds/soon.gif')" id="{{isset($id) ? $id : 'hero'}}">
    @if(!isset($menu)) @include('global.header') @endif
>>>>>>> Stashed changes
    <div class="logo-center"></div>
    <a href="#" class="scroll text-center" @click.prevent="scrollTo('#about')"></a>
</div>