<div class="section top has-background spaced" style="background-image: url('/img/backgrounds/soon.gif')" @click.prevent="scrollTo('#about')" id="{{isset($id) ? $id : 'hero'}}">
    @include('global.header')
    <div class="logo-center"></div>
    <a href="#" class="scroll text-center" @click.prevent="scrollTo('#about')"></a>
</div>