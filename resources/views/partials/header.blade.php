<header >
    <nav id="navBar" class="navbar bg-light">
        <div class="container ">
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
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Laravel Logo">
    </div>


    

</header>