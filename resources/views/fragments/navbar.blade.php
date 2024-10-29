<style>
    header {
        background: rgba(77, 42, 182, 0.8);
        color: #fff;
        padding-block: 4px;
        margin-block: -8px;
        margin-inline: -8px;
    }

    nav p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        padding-inline: 20px;
    }

    nav p a{
        color: #fff;
        text-decoration: none;
        padding-block: 10px;
        margin-inline: 10px;
    }

    nav p a:hover{
        background: orange;
        padding-block: 5px;
        padding-inline: 10px;
    }
</style>
<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('products.index')}}">Productos</a>
            <a href="{{route('clients')}}">Cliente</a>
            <a href="{{route('sales')}}">Ventas</a>
        </p>    
    </nav>    
</header>
<br>