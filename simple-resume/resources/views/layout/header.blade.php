<header>
        <nav class="container">
            <ul class="menu">
                @forelse ($menu as $item)
                    <li><a class="menuNav" href="{{ $item['href'] }}">{{ $item['title'] }}</a></li>
                @empty
                    qwertyuiop
                @endforelse

            </ul>
        </nav>
    </header>