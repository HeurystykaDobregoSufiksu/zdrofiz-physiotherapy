<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('css/tail.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500&display=swap" rel="stylesheet">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->


    </head>
    <body style="background-color: white">
    <b-container fluid id="app">
        <div v-if="seen">
            <b-navbar id="navbar" toggleable="sm" type="light" variant="light">
                <b-navbar-toggle target="nav-text-collapse"></b-navbar-toggle>
                <b-navbar-brand>ZDROFIZ</b-navbar-brand>
                <b-collapse id="nav-text-collapse" is-nav>
                    <b-navbar-nav>
                        <b-nav-text>Karolina Borawska   |</b-nav-text>

                        <b-nav-item href="#top"> O mnie</b-nav-item>
                        <b-nav-item href="#doswiadczenie"> Doświadczenie</b-nav-item>
                        <b-nav-item href="#kursy"> Kwalifikacje</b-nav-item>
                        <b-nav-item v-b-modal.modal-1 href="#wizyta"> Umów wizytę online</b-nav-item>
                        <b-nav-item href="#pytania"> Pytania i odpowiedzi</b-nav-item>
                    </b-navbar-nav>

                </b-collapse>
            </b-navbar>
        </div>
        <!-- Content here -->
        <b-row id="top">
            <b-col id="about" offset-sm="2" sm="4">
                <b-col sm="12" id="tekst">
                   <b-row><h1 style="animation-name: fadeleft;
    animation-duration: 2s">O ZDROFIZ</h1></b-row>
                    <b-row><p> Donec vitae leo id magna rutrum lacinia. Vestibulum rutru. Morbi et tellus justo. Maecenas pretium, justo ut fermentum porta, elit mauris sodales mauris, nec eleifend nunc elit sit amet tellus. Nam nisi enim, accumsan ac massa placerat, pellentesque viverra felis. Viva </p></b-row>
                    <b-row style="margin-top:2vh"><b-col sm="auto"><b-button v-b-modal.modal-1 href="#wizyta" class="mainbtn" variant="outline-info">Zarezerwuj wizytę online</b-button>
                            <b-button href="#doswiadczenie" class="navbtn" variant="outline-info">Doświadczenie</b-button>
                            <b-button href="#pytania" class="navbtn" variant="outline-info">Najczęściej zadawane pytania</b-button>
                            <b-button href="#kursy" class="navbtn" variant="outline-info">Certyfikaty</b-button>
                        </b-col></b-row>

                </b-col>
            </b-col>

            <b-col id="contact" offset-sm="1" sm="3">
                <b-col sm="12" id="imagecontainer">
                    <b-row class="justify-content-md-center text-center" id="zdjecie">
                        <b-col sm="12" >
                            <b-row align-h="center">
                                <b-col sm="6">
                                    <b-row><b-img center src="{{ asset('img/kar3.png') }}" rounded="circle" alt="Circle image" alt="Center image"></b-img></b-row>
                                </b-col>
                            </b-row>
                            <b-row align-h="center" style="margin-top:2vh" class="infoItems"><p>Karolina Borawska</p></b-row>
                            <b-row align-h="center" class="infoItems"><p>mgr. Fizjoterapii</p></b-row>
                            <b-row align-h="center" style="margin-top:2vh">
                                <b-col sm="10"><b-button class="infobtn "href="tel:555-555-5555" variant="outline-info">997-997-997</b-button></b-col>
                                <b-col sm="10"> <b-button v-b-modal.modal-2 class="infobtn" variant="outline-info"> k.borawska@o2.pl</b-button></b-col>
                            </b-row>
                        </b-col>
                    </b-row>
                </b-col>
            </b-col>
        </b-row>
        <b-row align-h="center" style=" height:100vh" id="content">
            <b-col style=""sm="12" id="ref">

                    <b-col offset-sm="2" sm="8" id="kursy" style="padding-top:10vh" class="generericIntro">
                    <b-row align-h="center"><h1 style="opacity:0.6">Kursy i certyfikaty</h1></b-row>
                    <b-row align-h="center" style="padding-bottom:7vh"><b-col sm="8"><p> Donec vitae leo id magna rutrum lacinia. Vestibulum rutru. Morbi et tellus justo. Maecenas pretium, justo ut fermentum porta, elit mauris sodales mauris, nec eleifend nunc elit sit amet tellus. Nam nisi enim, accumsan ac massa placerat, pellentesque viverra felis. Viva </p></b-col></b-row>

                    <b-row>
                        <b-col sm="3"><b-card  class="kursy" v-b-modal.modal-3 img-src="{{ asset('img/cert.png') }}" img-alt="Card image" img-top>
                                <b-card-header style="width:100%">kurs andrzeja masowa drugiego</b-card-header>
                                <b-card-text>
                                    Some quick example text to build on the card and make up the bulk of the card's content.
                                </b-card-text>
                            </b-card>
                        </b-col>
                        <b-col sm="3"><b-card  class="kursy" v-b-modal.modal-3 img-src="{{ asset('img/cert.png') }}" img-alt="Card image" img-top>
                                <b-card-header style="width:100%">kurs andrzeja masowa drugiego</b-card-header>
                                <b-card-text>
                                    Some quick example text to build on the card and make up the bulk of the card's content.
                                </b-card-text>
                            </b-card>
                        </b-col>
                        <b-col sm="3"><b-card  class="kursy" v-b-modal.modal-3 img-src="{{ asset('img/cert.png') }}" img-alt="Card image" img-top>
                                <b-card-header style="width:100%">kurs andrzeja masowa drugiego</b-card-header>
                                <b-card-text>
                                    Some quick example text to build on the card and make up the bulk of the card's content.
                                </b-card-text>
                            </b-card>
                        </b-col>
                        <b-col sm="3"><b-card  class="kursy" v-b-modal.modal-3 img-src="{{ asset('img/cert.png') }}" img-alt="Card image" img-top>
                                <b-card-header style="width:100%">kurs andrzeja masowa drugiego</b-card-header>
                                <b-card-text>
                                    Some quick example text to build on the card and make up the bulk of the card's content.
                                </b-card-text>
                            </b-card>
                        </b-col>
                        <b-col sm="3"><b-card  class="kursy" v-b-modal.modal-3 img-src="{{ asset('img/cert.png') }}" img-alt="Card image" img-top>
                                <b-card-header style="width:100%">kurs andrzeja masowa drugiego</b-card-header>
                                <b-card-text>
                                    Some quick example text to build on the card and make up the bulk of the card's content.
                                </b-card-text>
                            </b-card>
                        </b-col>
                        <b-col sm="3"><b-card  class="kursy" v-b-modal.modal-3 img-src="{{ asset('img/cert.png') }}" img-alt="Card image" img-top>
                                <b-card-header style="width:100%">kurs andrzeja masowa drugiego</b-card-header>
                                <b-card-text>
                                    Some quick example text to build on the card and make up the bulk of the card's content.
                                </b-card-text>
                            </b-card>
                        </b-col>
                        <b-col sm="3"><b-card  class="kursy" v-b-modal.modal-3 img-src="{{ asset('img/cert.png') }}" img-alt="Card image" img-top>
                                <b-card-header style="width:100%">kurs andrzeja masowa drugiego</b-card-header>
                                <b-card-text>
                                    Some quick example text to build on the card and make up the bulk of the card's content.
                                </b-card-text>
                            </b-card>
                        </b-col>
                        <b-col sm="3"><b-card  class="kursy" v-b-modal.modal-3 img-src="{{ asset('img/cert.png') }}" img-alt="Card image" img-top>
                                <b-card-header style="width:100%">kurs andrzeja masowa drugiego</b-card-header>
                                <b-card-text>
                                    Some quick example text to build on the card and make up the bulk of the card's content.
                                </b-card-text>
                            </b-card>
                        </b-col>
                    </b-row>
                </b-col>
                <b-row style="margin-top:5vh;margin-bottom:5vh" class="bg-gray-100">
                    <b-col offset-sm="2" sm="8" style="padding-top:7vh;padding-bottom:7vh" id="doswiadczenie" class="generericIntro">
                        <b-row align-h="center"><h1 style="opacity:0.6">Doświadczenie zawodowe</h1></b-row>
                        <b-row align-h="center"><b-col sm="8"><p> Donec vitae leo id magna rutrum lacinia. Vestibulum rutru. Morbi et tellus justo. Maecenas pretium, justo ut fermentum porta, elit mauris sodales mauris, nec eleifend nunc elit sit amet tellus. Nam nisi enim, accumsan ac massa placerat, pellentesque viverra felis. Viva </p></b-col></b-row>

                    </b-col>
                </b-row>


                <b-row align-h="center" style="padding-top:5vh" id="roadmap">
                    <b-col sm="8">
                        <b-row class="roadMappanel">
                            <b-col sm="5"  class="sidepanel align-self-end" id="leftPanel" >
                                <b-row align-h="center" class="roadcardtitle">
                                    <b-col sm="auto"><span>Kurs masowania uszu</span></b-col>
                                </b-row>
                                <b-row>
                                    <b-col  sm="12" style="margin:0px" class="roadmapCard">
                                        <b-row class="panelContent">
                                            <b-col  sm="3">

                                                <b-row><b-img center src="{{ asset('img/cert.png') }}"   fluid  alt="Circle image" alt="Center image"></b-img></b-row>
                                            </b-col>
                                            <b-col sm="9" class="cardtext">
                                                <span>wykładu Instruktora (z wykorzystaniem prezentacji multimedialnej i tablicy interaktywnej) z możliwością zadawania pytań Instruktorowi w czasie trwania webinaru.</span>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                </b-row>
                            </b-col>
                            <b-col  v-if="seen2" sm="2" style="padding:0px" >
                                <b-col sm="6" style="padding:0px" id="centerPanel"></b-col>
                                <b-row align-h="center"><div style="margin-left:-2px;width: 2vh;height: 2vh;border-radius: 20px" class="border-purple-600 bg-purple-600"></div></b-row>

                            </b-col>

                        </b-row>
                        <b-row class=="roadMappanel">
                            <b-col v-if="seen2" offset-sm="5" sm="2" style="padding:0px" >
                                <b-col sm="6" style="padding:0px" id="centerPanel"></b-col>
                                <b-row align-h="center"><div style="margin-left:-2px;width: 2vh;height: 2vh;border-radius: 20px" class="border-purple-600 bg-purple-600"></div></b-row>

                            </b-col>
                            <b-col  sm="5" class="sidepanel align-self-end" id="rightPanel" style="padding:0px" >
                                <b-row align-h="center" class="roadcardtitle">
                                    <b-col sm="auto"><span>Kurs masowania uszu</span></b-col>
                                </b-row>
                                <b-row>
                                    <b-col  sm="12" style="margin:0px" class="roadmapCard">
                                        <b-row class="panelContent">
                                            <b-col  sm="3">
                                                <b-row><b-img center src="{{ asset('img/cert.png') }}"   fluid  alt="Circle image" alt="Center image"></b-img></b-row>

                                            </b-col>
                                            <b-col sm="9" class="cardtext">
                                                <span>Wokół tych struktur narosło wiele mitów, dotyczących tego - czy i kiedy operować oraz jak je rehabilitować. Postaramy się przytoczyć aktualne doniesienia naukowe i sprawdzoną praktykę w pracy z łąkotkami.</span>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                </b-row>
                            </b-col>
                        </b-row>
                        <b-row class="roadMappanel">
                            <b-col sm="5"  class="sidepanel align-self-end" id="leftPanel" >
                                <b-row>
                                    <b-col  sm="12" style="margin:0px" class="roadmapCard">
                                        <b-row align-h="center" class="roadcardtitle">
                                            <b-col sm="auto"><span>Kurs masowania uszu</span></b-col>
                                        </b-row>
                                        <b-row class="panelContent">
                                            <b-col  sm="3">

                                                <b-row><b-img center src="{{ asset('img/cert.png') }}"   fluid  alt="Circle image" alt="Center image"></b-img></b-row>
                                            </b-col>
                                            <b-col sm="9" class="cardtext">
                                                <span>Ilość powodów bólów głowy jest tak duża, że nie sposób pominąć ich różnicowania, by ustalić przyczynę powstawania tego nieprzyjemnego, a niekiedy niebezpiecznego zjawiska.</span>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                </b-row>
                            </b-col>
                            <b-col  v-if="seen2" sm="2" style="padding:0px" >
                                <b-col sm="6" style="padding:0px" id="centerPanel"></b-col>
                                <b-row align-h="center"><div style="margin-left:-2px;width: 2vh;height: 2vh;border-radius: 20px" class="border-purple-600 bg-purple-600"></div></b-row>

                            </b-col>

                        </b-row>
                        <b-row class=="roadMappanel">

                            <b-col v-if="seen2" offset-sm="5" sm="2" style="padding:0px" >
                                <b-col sm="6" style="padding:0px" id="centerPanel"></b-col>
                                <b-row class="" align-h="center"><div style="margin-left:-2px;width: 2vh;height: 2vh;border-radius: 20px" class="border-purple-600 bg-purple-600"></div></b-row>

                            </b-col>
                            <b-col  sm="5" class=" align-self-end sidepanel" style="padding:0px" >
                                <b-row align-h="center" class="roadcardtitle">
                                    <b-col sm="auto"><span>Kurs masowania uszu</span></b-col>
                                </b-row>
                                <b-row>
                                    <b-col  sm="12" style="margin:0px" class="roadmapCard">
                                        <b-row class="panelContent">
                                            <b-col  sm="3">
                                                <b-row><b-img center src="{{ asset('img/cert.png') }}"   fluid  alt="Circle image" alt="Center image"></b-img></b-row>

                                            </b-col>
                                            <b-col sm="9" class="cardtext">
                                                <span>Proces gojenia się tkanek oraz procesy regeneracji organizmu są powszechnie znane. Jednak nadal mimo zrozumienia mechanizmu uszkodzenia</span>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                </b-row>
                            </b-col>
                        </b-row>
                        <b-row class="roadMappanel">
                            <b-col xs="2" sm="5"  class=" align-self-end sidepanel" >
                                <b-row align-h="center" class="roadcardtitle">
                                    <b-col sm="auto"><span>Kurs masowania uszu</span></b-col>
                                </b-row>
                                <b-row>
                                    <b-col  sm="12" style="margin:0px" class="roadmapCard">
                                        <b-row class="panelContent">
                                            <b-col  sm="3">

                                                <b-row><b-img center src="{{ asset('img/cert.png') }}"   fluid  alt="Circle image" alt="Center image"></b-img></b-row>
                                            </b-col>
                                            <b-col sm="9" class="cardtext">
                                                <span>Dolegliwości bólowe kręgosłupa są bardzo częstym problemem. Ich przyczyny, podobnie jak czynniki je wywołujące mogą być rożne. Powikłania i dolegliwości są często odczuwalne w innych niż kręgosłup</span>
                                            </b-col>
                                        </b-row>
                                    </b-col>
                                </b-row>
                            </b-col>
                            <b-col v-if="seen2" sm="2" style="padding:0px" >
                                <b-col sm="6" style="padding:0px" id="centerPanel"></b-col>
                                <b-row align-h="center"><div style="margin-left:-2px;width: 2vh;height: 2vh;border-radius: 20px" class="border-purple-600 bg-purple-600"></div></b-row>

                            </b-col>

                        </b-row>


                    </b-col>
                </b-row>

            </b-col>

            <b-col sm="12" id="pytania"style="margin-top: 5vh">
                <b-col offset-sm="2" sm="8" style="margin-bottom: 5vh">
                    <b-row align-h="center"><h1 style="opacity:0.6">Pytania i odpowiedzi</h1></b-row>
                </b-col>
                <b-col sm="8" offset-sm="2">


                    <b-row class="pytanie">
                        <p>Dlaczego tak jest?</p>
                    </b-row>
                    <b-row class="odpowiedz">
                        <p>Nie mam pojecia ziomuś</p>
                    </b-row>
                    <b-row class="pytanie">
                        <p>Jak nazywa się wzgórze w Paryżu, na którym zbudowano Bazylikę Sacre-Ceur?</p>
                    </b-row>
                    <b-row class="odpowiedz">
                        <p>Nie mam pojecia ziomuś</p>
                    </b-row>
                    <b-row class="pytanie">
                        <p>Kto prowadził teleturniej "Kocham Cię Polsko"?</p>
                    </b-row>
                    <b-row class="odpowiedz">
                        <p>Nie mam pojecia ziomuś</p>
                    </b-row>
                    <b-row class="pytanie">
                        <p> Który z "Trzech Muszkieterów" Alexandra Dumas'a miał w młodości zostać księdzem?</p>
                    </b-row>
                    <b-row class="odpowiedz">
                        <p>Nie mam pojecia ziomuś</p>
                    </b-row>
                    <b-row class="pytanie">
                        <p>W którym mieście Polska podpisała pokój z Krzyżakami w lutym 1411 roku?</p>
                    </b-row>
                    <b-row class="odpowiedz">
                        <p>Nie mam pojecia ziomuś</p>

                    </b-row>
                </b-col>
            </b-col>
        </b-row>
        <b-modal id="modal-3" size="lg" hide-footer cancel-disabled title="Kurs masowania uszu">
            <b-row align-h="center">
                <b-col sm="12">
                    <b-row>
                        <b-col sm="10" offset-sm="1" id="modaltext">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla suscipit fringilla tellus, sit amet mollis nisl. Duis efficitur lectus vulputate, euismod leo quis, tempor quam. Suspendisse id fringilla turpis, non tempor lacus. Cras blandit euismod lorem, vel venenatis purus varius vel. Praesent eu faucibus leo. Integer efficitur lectus sit amet orci semper, ac tempor lectus maximus. Mauris auctor venenatis risus ut condimentum. Duis pharetra aliquet volutpat.
                        </b-col>
                    </b-row>
                    <b-row align-h="center">
                        <b-col sm="auto" >
                            <b-img src="{{ asset('img/cert.png') }}" fluid alt="Fluid image"></b-img>
                        </b-col>

                    </b-row>

                </b-col>
            </b-row>
        </b-modal>
        <b-modal id="modal-2" hide-footer cancel-disabled title="Wyslij email">
            <b-row align-h="center">
                <b-col sm="8">
                    <b-form type="submit" style="margin-bottom:5vh" >
                        <b-row>Imie <b-form-input class="focus:border-purple-600"></b-form-input></b-row>
                        <b-row>Nazwisko <b-form-input></b-form-input></b-row>
                        <b-row>Nr telefonu<b-form-input></b-form-input></b-row>
                        <b-row>Wiadomość<b-form-textarea></b-form-textarea></b-row>
                        <b-row style="margin-top:3vh"><b-button  v-on:click="$bvModal.hide('modal-2')" type="submit" class="infobtn" style="width:100%">Wyślij</b-button></b-row>
                    </b-form>
                </b-col>
            </b-row>
        </b-modal>
        <b-modal id="modal-1" hide-footer cancel-disabled title="Zarezerwuj termin online">
            <b-row style="min-height:3px">
                <b-col class="stepper"></b-col>
                <b-col  class="stepper"></b-col>
                <b-col class="stepper"></b-col>
            </b-row>
            <b-row v-if="step==1">
                <b-col sm="12" style="margin-top:2vh">
                    <b-row align-v="center" style="margin-bottom: 2vh" align-h="left">
                        <b-col offset-sm="2" sm="1"><b-button v-if="selectedMonth>month" v-on:click="findPrevMonth()" ><</b-button></b-col>
                        <b-col sm="6" style="text-align: center"> @{{ monthName +" "+year}}</b-col>
                        <b-col sm="1"><b-button v-on:click="findNextMonth()">></b-button>
                        </b-col>
                    </b-row>
                    <b-row style="margin:2vh"align-h="left" >
                        <b-col sm="2" v-for="aday in days" v-if="aday>=day ||  selectedMonth!=month"><b-button  class="infobtn" style="width:100%" v-on:click="setDate(aday,selectedMonth)">@{{ aday }}</b-button></b-col><b-col sm="2" v-else><b-button  class="infobtn" style="width:100%"  disabled v-on:click="setDate(aday,selectedMonth)">@{{ aday }}</b-button></b-col>
                    </b-row>
                </b-col>
            </b-row>
            <b-row align-h="center" v-if="step==2">
                <b-col sm="5">
                <b-form-select v-on:change="savehour(2)" style="border-radius:20px;margin-top:5vh"  class="mb-3">
                    <b-form-select-option disabled>Wybierz godzinę</b-form-select-option>
                    <b-form-select-option  v-for="hour in hours" value="3">@{{ hour }}:00</b-form-select-option>
                </b-form-select>
                </b-col>
            </b-row>


            <b-row align-h="center" v-if="step==3">
                <b-col sm="8">
                    <b-form type="submit" style="margin-bottom:5vh" >
                        <b-row>Imie <b-form-input class="focus:border-purple-600"></b-form-input></b-row>
                        <b-row>Nazwisko <b-form-input></b-form-input></b-row>
                        <b-row>Nr telefonu<b-form-input></b-form-input></b-row>
                        <b-row style="margin-top:3vh"><b-button  v-on:click="$bvModal.hide('modal-1')" type="submit" class="infobtn" style="width:100%">Umów wizyte</b-button></b-row>
                    </b-form>
                </b-col>
            </b-row>


        </b-modal>
    </b-container>








    <script src="{{ asset('/js/app.js') }}"></script>
    <script>


        const app=new Vue({
            el: '#app',
            mounted:function(){
                this.getDay(),
                    this.getYear(),
                    this.getMonth(),
                    this.getDaysInMonth(this.month,this.year),
                    this.getMonthName(this.month)
                    this.seenfunc();

            },
            created () {
                window.addEventListener('scroll', this.handleScroll);
                window.addEventListener('resize', this.seenfunc);
            },

            data: {
                selected:null,
                step:1,
                seen:false,
                seen2:true,
                reservation: [],
                hours:[8,9,10,11,12,13,14,15,16,17],
                day : 0,
                selectedMonth : 0,
                month  : 0,
                monthName  : 0,
                year    : 0,
                daysInMonth    : 0,
                days: 0
            },
            methods: {

                seenfunc(event){
                    if(window.innerWidth<1000){
                        this.seen2=false;
                    }else{
                        this.seen2=true;
                    }
                },
                savehour : function(hour){
                    this.reservation.push(2);
                    this.step+=1;
                },
                handleScroll (event) {
                    if(window.scrollY>window.innerHeight/2){
                        this.seen=true;
                    }else{
                        this.seen=false;
                    }
                },
                findPrevMonth: function(){
                    if(this.selectedMonth>this.month){
                        this.selectedMonth-=1;
                    }
                    this.getMonthName(this.selectedMonth)
                    this.getDaysInMonth(this.selectedMonth,this.year)
                },
                setDate: function(date1,month1){
                    this.reservation.push(date1)
                    this.reservation.push(month1)
                    this.step+=1;

                },
                findNextMonth: function(){
                    if(this.selectedMonth<11){
                        this.selectedMonth+=1;
                    }
                    this.getMonthName(this.selectedMonth)
                    this.getDaysInMonth(this.selectedMonth,this.year)
                },
                makeRes: function(){
                    const reservation=this.day+"/"+this.month+"/"+this.year;
                },
                getDay: function(){
                    this.day= new Date().getDate();
                },
                getYear: function () {
                    this.year= new Date().getFullYear();
                },
                getMonth: function () {
                    this.month= new Date().getMonth();
                    this.selectedMonth = this.month;
                },
                getDaysInMonth: function (month,year) {
                    this.daysInMonth =new Date(year, month, 0).getDate();
                    this.days=Array.from(Array(this.daysInMonth).keys())
                },
                getMonthName: function (month) {
                    let dict = {
                        1: "styczen",
                        2: "luty",
                        3: "marzec",
                        4: "kwiecien",
                        5: "maj",
                        6: "czerwiec",
                        7: "lipiec",
                        8: "sierpien",
                        9: "wrzesien",
                        10: "pazdziernik",
                        11: "listopad",
                        12: "grudzien",

                    };
                    this.monthName= dict[month+1];
                }
            }

        });
        const calendar=new Vue({

            el: '',
            mounted:function(){
                    this.getDay(),
                    this.getYear(),
                    this.getMonth(),
                    this.getDaysInMonth(this.month,this.year),
                    this.getMonthName(this.month)

            },
            data: {
                reservation: [],
                day : 0,
                selectedMonth : 0,
                month  : 0,
                monthName  : 0,
                year    : 0,
                daysInMonth    : 0,
                days: 0
            },

            methods:{

                findPrevMonth: function(){
                    if(this.selectedMonth>this.month){
                        this.selectedMonth-=1;
                    }
                    this.getMonthName(this.selectedMonth)
                    this.getDaysInMonth(this.selectedMonth,this.year)
                },
                setDate: function(date1,month1){
                    this.reservation.push(date1)
                    this.reservation.push(month1)

                },
                findNextMonth: function(){
                    if(this.selectedMonth<11){
                        this.selectedMonth+=1;
                    }
                    this.getMonthName(this.selectedMonth)
                    this.getDaysInMonth(this.selectedMonth,this.year)
                },
                makeRes: function(){
                    const reservation=this.day+"/"+this.month+"/"+this.year;
                },
                getDay: function(){
                    this.day= new Date().getDate();
                },
                getYear: function () {
                    this.year= new Date().getFullYear();
                },
                getMonth: function () {
                    this.month= new Date().getMonth();
                    this.selectedMonth = this.month;
                },
                getDaysInMonth: function (month,year) {
                    this.daysInMonth =new Date(year, month, 0).getDate();
                    this.days=Array.from(Array(this.daysInMonth).keys())
                },
                getMonthName: function (month) {
                    let dict = {
                        1: "styczen",
                        2: "luty",
                        3: "marzec",
                        4: "kwiecien",
                        5: "maj",
                        6: "czerwiec",
                        7: "lipiec",
                        8: "sierpien",
                        9: "wrzesien",
                        10: "pazdziernik",
                        11: "listopad",
                        12: "grudzien",

                    };
                    this.monthName= dict[month+1];
                }

            }
        });
    </script>
    </body>
</html>
