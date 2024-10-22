<div class="style=width: 100%;">
    <hr style="width:100%;">
    <form method="POST" action="{{ route('encuestar.store') }}" novalidate>
        @csrf
        <b>Datos Descriptivos</b>
        <hr style="width:100%;">
        <!-- identificacion1 -->
        <div class="mt-2">
            <legend><b> Edad.</b></legend>
                <div class="input-group">
                    <input type="radio" id="i1" name="i1" value="1"  />  
                    <span class="input-group-text">Menor de 25 años</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="i1" name="i1" value="2"  />  
                    <span class="input-group-text">25 a 35 años</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="i1" name="i1" value="3"  />  
                    <span class="input-group-text">36 a 45</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="i1" name="i1" value="4" checked />  
                    <span class="input-group-text">46 a 55</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="i1" name="i1" value="5" checked/>  
                    <span class="input-group-text">56 a más</span>
                </div>
            <x-input-error :messages="$errors->get('i1')" class="mt-2" />
        </div>
        <!-- identificacion2 -->
        <div class="mt-2">
            <legend><b> Atigüedad laboral</b></legend>
                <div class="input-group">
                    <input type="radio" id="i2" name="i2" value="1"  />  
                    <span class="input-group-text">1 a 3  años</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="i2" name="i2" value="2"  />  
                    <span class="input-group-text">4 a 5 años</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="i2" name="i2" value="3"  />  
                    <span class="input-group-text">6 a 10 </span>
                </div>
                <div class="input-group">
                    <input type="radio" id="i2" name="i2" value="4" checked/>  
                    <span class="input-group-text">Más de 10</span>
                </div>
                
            <x-input-error :messages="$errors->get('i2')" class="mt-2" />
        </div>
        <!-- identificacion3 -->
        <div class="mt-2">
            <legend><b> Sexo</b></legend>
                <div class="input-group">
                    <input type="radio" id="i3" name="i3" value="1"  />  
                    <span class="input-group-text">Hombre</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="i3" name="i3" value="2" checked/>  
                    <span class="input-group-text">Mujer</span>
                </div>
            <x-input-error :messages="$errors->get('i3')" class="mt-2" />
        </div>
        <hr style="width:100%;">
        <b>Compromiso con el puesto de trabajo</b>
        <hr style="width:100%;">
        <!-- Pregunta1 -->
        <div class="mt-2">
            <legend><b> Conozco la misión y visión del Instituto.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p1" name="p1" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p1" name="p1" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p1" name="p1" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p1" name="p1" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p1" name="p1" value="5" checked/>  
                    <span class="input-group-text">Totalmente de de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p1')" class="mt-2" />
        </div>
        <!-- Pregunta2 -->
        <div class="mt-2">
            <legend><b>Me siento comprometido con el Instituto.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p2" name="p2" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p2" name="p2" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p2" name="p2" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p2" name="p2" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p2" name="p2" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p2')" class="mt-2" />
        </div>
        <!-- Pregunta3 -->
        <div class="mt-2">
            <legend><b>Me siento orgulloso/a de la aportación que hago con mi trabajo al Instituto.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p3" name="p3" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p3" name="p3" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p3" name="p3" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p3" name="p3" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p3" name="p3" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p3')" class="mt-2" />
        </div>
        <!-- Pregunta4 -->
        <div class="mt-2">
            <legend><b>Siento que aprovecho y desarrollo todo mi potencial durante mi jornada de trabajo.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p4" name="p4" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p4" name="p4" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p4" name="p4" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p4" name="p4" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p4" name="p4" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p4')" class="mt-2" />
        </div>
        <hr style="width:100%;">
        <b>Liderazgo del jefe inmediato</b>
        <hr style="width:100%;">
        <!-- Pregunta5 -->
        <div class="mt-2">
            <legend><b>Me brinda orientación que me ayuda a mejorar en el trabajo.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p5" name="p5" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p5" name="p5" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p5" name="p5" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p5" name="p5" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p5" name="p5" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p5')" class="mt-2" />
        </div>
        <!-- Pregunta6 -->
        <div class="mt-2">
            <legend><b>Es fácil acercarme y comunicarme con mi jefe/a inmediato/a.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p6" name="p6" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p6" name="p6" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p6" name="p6" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p6" name="p6" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p6" name="p6" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p6')" class="mt-2" />
        </div>
        <!-- Pregunta7 -->
        <div class="mt-2">
            <legend><b>Mi jefe/a da instrucciones claras al momento de delegar responsabilidades o encomendar una actividad.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p7" name="p7" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p7" name="p7" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p7" name="p7" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p7" name="p7" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p7" name="p7" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p7')" class="mt-2" />
        </div>
        <!-- Pregunta8 -->
        <div class="mt-2">
            <legend><b>Acepta ideas y sugerencias por parte del equipo de trabajo.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p8" name="p8" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p8" name="p8" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p8" name="p8" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p8" name="p8" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p8" name="p8" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p8')" class="mt-2" />
        </div>
        <hr style="width:100%;">
        <b>Ambiente Laboral</b>
        <hr style="width:100%;">
        <!-- Pregunta9 -->
        <div class="mt-2">
            <legend><b>Considero que existe un buen ambiente de trabajo.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p9" name="p9" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p9" name="p9" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p9" name="p9" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p9" name="p9" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p9" name="p9" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p9')" class="mt-2" />
        </div>
        <!-- Pregunta10 -->
        <div class="mt-2">
            <legend><b>Dentro de mi área y en el Instituto se trabaja en equipo.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p10" name="p10" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p10" name="p10" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p10" name="p10" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p10" name="p10" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p10" name="p10" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p10')" class="mt-2" />
        </div>
        <!-- Pregunta11 -->
        <div class="mt-2">
            <legend><b>La comunicación entre compañeros/as es clara y directa.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p11" name="p11" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p11" name="p11" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p11" name="p11" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p11" name="p11" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p11" name="p11" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p11')" class="mt-2" />
        </div>
        <!-- Pregunta12 -->
        <div class="mt-2">
            <legend><b>Me siento respaldado por mis compañeros/as de mi área de trabajo.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p12" name="p12" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p12" name="p12" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p12" name="p12" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p12" name="p12" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p12" name="p12" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p12')" class="mt-2" />
        </div>
        <!-- Pregunta13 -->
        <div class="mt-2">
            <legend><b>Cuando lo necesito puedo contar con la colaboración de otras áreas.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p13" name="p13" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p13" name="p13" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p13" name="p13" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p13" name="p13" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p13" name="p13" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p13')" class="mt-2" />
        </div>
        <!-- Pregunta14 -->
        <div class="mt-2">
            <legend><b>Estoy dispuesto a apaoyar a mis compañeros/as cuando lo necesitan.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p14" name="p14" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p14" name="p14" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p14" name="p14" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p14" name="p14" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p14" name="p14" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p14')" class="mt-2" />
        </div>
        <hr style="width:100%;">
        <b>Condiciones de trabajo</b>
        <hr style="width:100%;">
        <!-- Pregunta15 -->
        <div class="mt-2">
            <legend><b>Dispongo de los materiales y recursos para realizar mi trabajo.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p15" name="p15" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p15" name="p15" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p15" name="p15" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p15" name="p15" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p15" name="p15" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p15')" class="mt-2" />
        </div>
        <!-- Pregunta16 -->
        <div class="mt-2">
            <legend><b>Las condiciones de espacio, iluminación, mobiliario y equipo son adecuados para desempeñar mi trabajo.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p16" name="p16" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p16" name="p16" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p16" name="p16" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p16" name="p16" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p16" name="p16" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p16')" class="mt-2" />
        </div>
        <!-- Pregunta17 -->
        <div class="mt-2">
            <legend><b>Las áreas de trabajo se conservan limpias y en orden, permitiendo el desarrollo de las actividades.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p17" name="p17" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p17" name="p17" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p17" name="p17" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p17" name="p17" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p17" name="p17" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p17')" class="mt-2" />
        </div>
        <!-- Pregunta18 -->
        <div class="mt-2">
            <legend><b>Se cuenta con un Plan de Protección Civil y se tienen los medios para llevarlo a cabo.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p18" name="p18" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p18" name="p18" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p18" name="p18" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p18" name="p18" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p18" name="p18" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p18')" class="mt-2" />
        </div>
        <hr style="width:100%;">
        <b>Prevención de riesgos psicosociales</b>
        <hr style="width:100%;">
        <!-- Pregunta19 -->
        <div class="mt-2">
            <legend><b>La carga de trabajo y mi manejo del estrés son un problema para mi.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p19" name="p19" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p19" name="p19" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p19" name="p19" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p19" name="p19" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p19" name="p19" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p19')" class="mt-2" />
        </div>
        <!-- Pregunta20 -->
        <div class="mt-2">
            <legend><b>Recibo las herramientas para gestionar mi estrés (Platicas psicológicas).</b></legend>
                <div class="input-group">
                    <input type="radio" id="p20" name="p20" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p20" name="p20" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p20" name="p20" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p20" name="p20" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p20" name="p20" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p20')" class="mt-2" />
        </div>
        <!-- Pregunta21 -->
        <div class="mt-2">
            <legend><b>Luego de terminar con mi jornada de trabajo, cuento con el tiempo suficiente para relajarme y recuperar mi energía para el día siguiente.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p21" name="p21" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p21" name="p21" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p21" name="p21" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p21" name="p21" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p21" name="p21" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p21')" class="mt-2" />
        </div>
        <!-- Pregunta22 -->
        <div class="mt-2">
            <legend><b>Tengo las facilidades para tomar los permisos otorgados por la ley.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p22" name="p22" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p22" name="p22" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p22" name="p22" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p22" name="p22" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p22" name="p22" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p22')" class="mt-2" />
        </div>
        <!-- Pregunta23 -->
        <div class="mt-2">
            <legend><b>Conozco los permisos otorgados por el MIG y me he visto beneficiado/a con ellos.</b></legend>
                <div class="input-group">
                    <input type="radio" id="p23" name="p23" value="1"  />  
                    <span class="input-group-text">Totalmente en desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p23" name="p23" value="2"  />  
                    <span class="input-group-text">En desacuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p23" name="p23" value="3"  />  
                    <span class="input-group-text">Neutral</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p23" name="p23" value="4"  />  
                    <span class="input-group-text">De acuerdo</span>
                </div>
                <div class="input-group">
                    <input type="radio" id="p23" name="p23" value="5" checked/>  
                    <span class="input-group-text">Totalmente de acuerdo</span>
                </div>
            <x-input-error :messages="$errors->get('p23')" class="mt-2" />
        </div>
        <div class="flex items-center mt-4">
            <x-primary-button class="w-full justify-center">
                {{ __('Guardar') }}
            </x-primary-button>
        </div>
    </form>
</div>
