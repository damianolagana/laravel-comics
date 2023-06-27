<header >
    <nav id="navBar" class="navbar bg-body-tertiary">
        <div class="container w-75">
            <div>
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Laravel Logo">
            </div>
            <div class="w-75 d-flex justify-content-evenly">
                @foreach ($links as $link)
                    <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                @endforeach 
            </div>
            <input type="text" name="" placeholder="Search">
            
           
        
        </div>
    </nav>


    

</header>