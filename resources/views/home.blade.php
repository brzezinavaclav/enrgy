@extends('layouts.app')

@section('content')
    <div class="jumbotron cover">
        <div class="container text-center vcenter">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>
    <div class="container">
        <div class="row text-center section">
            <h1 class="section-heading">About</h1>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean placerat. Maecenas libero. Etiam commodo dui eget wisi. In laoreet, magna id viverra tincidunt, sem odio bibendum justo, vel imperdiet sapien wisi sed libero. Nulla quis diam. Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Duis ante orci, molestie vitae vehicula venenatis, tincidunt ac pede. Pellentesque pretium lectus id turpis. Nullam lectus justo, vulputate eget mollis sed, tempor sed magna.</p>

            <p>Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean placerat. Etiam egestas wisi a erat. Integer lacinia. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. In rutrum. Phasellus et lorem id felis nonummy placerat. Ut tempus purus at lorem. Praesent vitae arcu tempor neque lacinia pretium. Vivamus ac leo pretium faucibus. Cras elementum. Nunc tincidunt ante vitae massa. Aenean vel massa quis mauris vehicula lacinia. In dapibus augue non sapien. Morbi scelerisque luctus velit. Etiam bibendum elit eget erat. Ut tempus purus at lorem. Etiam quis quam. Pellentesque ipsum.</p>
        </div>
        <div class="row text-center section">
            <h1 class="section-heading">Vyhledat nabídku</h1>
            <form>
                <div class="col-md-6 text-left">
                    <fieldset>
                        <legend>Elektřina</legend>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Číslo OPM">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Spotřeba celkem">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Spotřeba ve vysokém tarifu (VT)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Spotřeba v nízkém tarifu (NT)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Platba celkem">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cena ve vysokém tarifu (VT)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cena v nízkém tarifu (NT)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Měsíční platba za odběrné místo">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Distribuční sazba">
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-6 text-left">
                    <fieldset>
                        <legend>Zemní plyn</legend>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Číslo OPM">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Spotřeba celkem">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Spotřeba ve vysokém tarifu (VT)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Cena komodity">
                        </div>
                    </fieldset>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">Vyhledat nabídku</button>
                </div>
            </form>
        </div>
    </div>
@endsection
