@extends('layouts.admin', ['page_name' => 'Programmes'] )

@section('contents')

    <div class="input-group">
        <h1>Programs</h1>

        <div class="programmes">
            @foreach ($programmes as $programme )

                <div class="card">

                    <h3>Program</h3>
                    <div class="input flex-col">
                        <label for="title"> Title </label>
                        <input type="text" name = 'programmes[{{$loop->index}}][title]' value = '{{$programme->title}}'>
                        @error('programmes.*.position')
                            <div class="error">
                                please provide the Title of your Program
                            </div>
                        @enderror
                    </div>

                    <div class="input flex-col">
                        <label for="text"> Description </label>
                        <textarea type="text" name = 'programmes[{{$loop->index}}][text]' >'{{$programme->content}}'</textarea>
                        @error('programmes.*.position')
                            <div class="error">
                                please provide a short description of your Program
                            </div>
                        @enderror
                    </div>
            
                    <div class="input flex-col">
                        <label for="image"> Program Image</label>
                        <input type="file" accept="images/*" name = 'programmes[{{$loop->index}}][image]'>
                        <a style = 'color: blue; text-decoration: underline;' onclick = 'this.closest(".card").remove();'>Remove Programme</a>
                    </div> 
        
                </div>
                
            @endforeach
        </div>

        <div class="input">
            <div class = 'button' onclick = 'new_hero();'>New Program</div>
        </div>
    
    </div>


@endsection



@section('scripts')

    <script>
        let card_blueprint = `
        <div class="card">

            <h3>Program</h3>
            <div class="input flex-col">
                <label for="title"> Title </label>
                <input type="text" name = 'programmes[{index}][title]' >
                @error('programmes.*.position')
                    <div class="error">
                        please provide the Title of your Program
                    </div>
                @enderror
            </div>

            <div class="input flex-col">
                <label for="text"> Description </label>
                <textarea type="text" name = 'programmes[{index}][text]' ></textarea>
                @error('programmes.*.position')
                    <div class="error">
                        please provide a short description of your Program
                    </div>
                @enderror
            </div>

            <div class="input flex-col">
                <label for="image"> Program Image</label>
                <input type="file" accept="images/*" name = 'programmes[{index}][image]'>
                <a style = 'color: blue; text-decoration: underline;' onclick = 'this.closest(".card").remove();'>Remove Programme</a>
            </div> 

        </div>
        `;


        function new_hero() {
            select('.programmes').insertAdjacentHTML('beforeend', card_blueprint.replaceAll('{index}', selectAll('.card').length));
            select('.screen').scrollTop = select('.screen').scrollHeight;
        }

        
    </script>
@endsection
