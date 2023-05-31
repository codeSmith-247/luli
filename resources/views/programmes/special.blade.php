@extends('layouts.default')

@section('styles')
    <link rel = 'stylesheet' href = '{{asset("styles/components/navigation.css")}}'>
    <link rel = 'stylesheet' href = '{{asset("styles/components/footer.css")}}'>
    {{-- <link rel = 'stylesheet' href = '{{asset("styles/general.css")}}'> --}}
    <link rel="stylesheet" href="{{asset('styles/programmes/special.css')}}">
@endsection

@section('contents')

    <header>
        <div class="content">
            <h1>Empowering Special Learners</h1>
            <p>Providing personalized support, resources, and opportunities that empower students with disabilities to thrive academically, socially, and emotionally.</p>
        </div>
        <div class="image-box">
            <img src="{{asset('images/program/image_0.jpg')}}" alt="background image" >
            <div class="overlay absolute"></div>
        </div>
    </header>

    <section>
        <h2>Objective</h2>
        <p>
            It was determined that our initial efforts in 2022 was a resounding success but we realized that we needed to do more this time around. We decided that in addition to regular schools, focus this year will be on special education schools which are for disabled children.
        </p>
    
        <h2>Focus Areas</h2>

        <div class="grid-box">

            <div class="card">
                <div class="grid-item">
                    <div class="image">
                        <img src="{{asset('images/program/image_20.jpg')}}" alt="background image" >
                    </div>
                    <div class="content">
                        <h2>Atunda Olu School for the physically and mentally challenged. 12 Curtis Adeniyi Jones St,; Surulere, Lagos</h2>
                        <p>
                            Atunda Olu is a Lagos State government managed school, but the resources is equally limited. We were able to provide amongst other things, food and educational materials and cash transfer sum of N100,000 to aid in further growth and development. 
                        </p>
                    </div>
                </div>
    
                
            </div>

            <div class="card">
                <div class="grid-item">
                    <div class="image">
                        <img src="{{asset('images/program/image_4.jpg')}}" alt="background image" >
                    </div>
                    <div class="content">
                        <h2>Parcelli School for the blind and partially sighted 30, Ajao Street, Surulere Lagos.</h2>
                        <p>
                            Parcelli School is a partnership between Lagos State Government and the Catholic Archdiocese of Lagos aimed at supporting and educating the blind. We were able to donate food materials; educational materials and cash transfer of N250,000 to assist in their very laudable efforts.
                        </p>
                    </div>
                </div>
    
                
            </div>

            <div class="card">
                <div class="grid-item">
                    <div class="image">
                        <img src="{{asset('images/program/image_18.jpg')}}" alt="background image" >
                    </div>
                    <div class="content">
                        <h2>Wesley School for hearing impaired children, 30 Ajao St, Lagos. Schools 1 and 2.</h2>
                        <p>Wesley School is located on the same campus as Parcelli School but with a different focus. The 2 Schools at Wesley focused on the hearing impaired and deaf children. We were able to support some of the 121 children with food materials; school uniforms for the academic year and tables for the school dining halls. </p>
                    </div>
                </div>
    
                
            </div>


            <div class="card">
                <div class="grid-item">
                    <div class="image">
                        <img src="{{asset('images/program/image_0.jpg')}}" alt="background image" >
                    </div>
                    <div class="content">
                        <h2>HIKANOS Foundation and Orphanage, 1, Fakoyabi Street, a Ebute-Igbogbo, Lagos. An orphanage set us to assist abandoned children.</h2>
                        <p>HIKANOS was set up as an orphanage to provide for abandoned children or those unwanted by their parents and those deemed living in unsafe surroundings and must be removed by the order of Courts. We were able to provide large quantities of food items to assist the school in their very important and tireless work. </p>
                    </div>
                </div>
    
                
            </div>


            <div class="card">
                <div class="grid-item">
                    <div class="image">
                        <img src="{{asset('images/program/image_2.jpg')}}" alt="background image" >
                    </div>
                    <div class="content">
                        <h2>Mipat School Ikorodu for the underprivileged.</h2>
                        <p>Mipat School is although a private school but is established in a run down neighborhood where most parents live in less than $1 a day. The school takes on all classes of children, from the neighborhood including those unable to pay. We provided school materials; books and uniforms for the school for the academic year during our visit.</p>
                    </div>
                </div>
    
                
            </div>


            <div class="card">
                <div class="grid-item">
                    <div class="image">
                        <img src="{{asset('images/program/image_17.jpg')}}" alt="background image" >
                    </div>
                    <div class="content">
                        <h2>Adeniji Nursery and Primary School, Lagos, which serves the underprivileged neighborhood . </h2>
                        <p>Adeniji Nursery and Primary School really exemplified the neighborhood that they served. This was a State School but in exceptionally dilapidated state. With our limited resources, our focus was on their Nursery Classes for now. We provided benches; chairs; tables book shelves including sleeping mats to assist their ongoing efforts for the year.</p>
                    </div>
                </div>
    
                
            </div>
        </div>
    </section>

@endsection