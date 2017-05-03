<div class="nav-area none" v-if="showNav">
    <div class="nav light" @click.prevent="showNav = false"></div>
    <ul class="text-center" @mouseleave="removeBackground">
        <li @mouseover="updateNavBg('/img/backgrounds/soon.gif', 'center')">
            <a href="/" @click.prevent="goTo('#hero')">Look</a>
        </li>
        <li @mouseover="updateNavBg('/img/backgrounds/2.png')">
            <a href="/" @click.prevent="goTo('#us')">Services</a>
        </li>
        <li @mouseover="updateNavBg('/img/backgrounds/3.png')">
            <a href="/" @click.prevent="goTo('#labs')">Labs</a>
        </li>
        <li @mouseover="updateNavBg('/img/backgrounds/4.png')">
            <a href="/" @click.prevent="goTo('#contact')">Contact</a>
        </li>
    </ul>
</div>
<div class="nav" @click.prevent="showNav = true"></div>
