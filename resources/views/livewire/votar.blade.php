<div class="w-full">
    <form method="POST" action="{{ route('votar.store') }}" novalidate>
        @csrf
        <!-- Voto1 -->
        <div class="mt-4">
            <x-input-label for="voto1" :value="__('JEFE DE DEPARTAMENTO U HOMOLOGO')" />
            <select
                id="voto1"
                name="voto1"
                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-200 dark:text-gray-900 focus:border-green-400 dark:focus:border-green-400 focus:ring-green-400 dark:focus:ring-green-400 rounded-md shadow-sm"
            >
                <option value="Abstención">-- Selecciona una opción--</option>
                <option value="DUEÑAS DEL REAL ALEJANDRO">DUEÑAS DEL REAL ALEJANDRO</option>
                <option value="ESPINOZA PALACIOS CHRISTY YAZMIN ">ESPINOZA PALACIOS CHRISTY YAZMIN </option>
                <option value="GARCIA MARQUEZ LAURA ERIKA ">GARCIA MARQUEZ LAURA ERIKA </option>
                <option value="GODINA GUARDADO ELIZABETH">GODINA GUARDADO ELIZABETH</option>
                <option value="JIMENEZ SORIANO JANETH DEL CARMEN">JIMENEZ SORIANO JANETH DEL CARMEN</option>
                <option value="LOPEZ AMBRIZ MARIBEL">LOPEZ AMBRIZ MARIBEL</option>
                <option value="MARQUEZ ALONSO LAURA ROCIO">MARQUEZ ALONSO LAURA ROCIO</option>
                <option value="MENCHACA MURILLO ELEANE">MENCHACA MURILLO ELEANE </option>
                <option value="MEZA RIVERA JUAN RODOLFO">MEZA RIVERA JUAN RODOLFO</option>
                <option value="PEREZCHICA NAVA MARIA AZUCENA">PEREZCHICA NAVA MARIA AZUCENA</option>
                <option value="PULIDO MÁRQUEZ JORGE LUIS">PULIDO MÁRQUEZ JORGE LUIS</option>
                <option value="RAMIREZ GARCIA CYNTHIA YAZMIN">RAMIREZ GARCIA CYNTHIA YAZMIN</option>
                <option value="RIVERA ESQUIVEL JUAN HIPOLITO">RIVERA ESQUIVEL JUAN HIPOLITO</option>
                <option value="ROMERO MARTINEZ MIRNA DORELLY">ROMERO MARTINEZ MIRNA DORELLY</option>
                <option value="SALAZAR ARELLANO RODOLFO">SALAZAR ARELLANO RODOLFO</option>
                <option value="SERRANO FLORES BLANCA AURORA">SERRANO FLORES BLANCA AURORA</option>
                <option value="TAPIA RODRIGUEZ ANGEL ARMANDO">TAPIA RODRIGUEZ ANGEL ARMANDO</option>
                <option value="TOBANCHE CONTRERAS AIDE GUADALUPE">TOBANCHE CONTRERAS AIDE GUADALUPE</option>
            </select>
            <x-input-error :messages="$errors->get('voto1')" class="mt-2" />
        </div>
        <!-- Voto2 -->
        <div class="mt-4">
            <x-input-label for="voto2" :value="__('PERSONAL ADMINISTRATIVO')" />
            <select
                id="voto2"
                name="voto2"
                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-200 dark:text-gray-900 focus:border-green-400 dark:focus:border-green-400 focus:ring-green-400 dark:focus:ring-green-400 rounded-md shadow-sm"
            >
                <option value="Abstención">-- Selecciona una opción--</option>
                <option value="AGAMA ALONSO ERIKA">AGAMA ALONSO ERIKA</option>
                <option value="ANAYA IBARRA GABRIELA">ANAYA IBARRA GABRIELA</option>
                <option value="BARBOSA SALINAS MARIANA">BARBOSA SALINAS MARIANA</option>
                <option value="BAUTISTA MARTINEZ MEREYDA">BAUTISTA MARTINEZ MEREYDA</option>
                <option value="CELEDON MOSQUEDA ISABEL">CELEDON MOSQUEDA ISABEL</option>
                <option value="CRISTERNA DE LUNA CARMEN PATRICIA">CRISTERNA DE LUNA CARMEN PATRICIA</option>
                <option value="DAVILA SANCHEZ LAURA ELENA">DAVILA SANCHEZ LAURA ELENA</option>
                <option value="DE LA FUENTE CASTAÑEDA LAURA">DE LA FUENTE CASTAÑEDA LAURA</option>
                <option value="DE LA TORRE BELMONTES MIRNA VERONICA">DE LA TORRE BELMONTES MIRNA VERONICA</option>
                <option value="DE LA TORRE PITONES MARIA ISABEL">DE LA TORRE PITONES MARIA ISABEL</option>
                <option value="DELGADO ZEGBE KARLA EDITH">DELGADO ZEGBE KARLA EDITH</option>
                <option value="DIAZ HERNANDEZ ELISELDA">DIAZ HERNANDEZ ELISELDA</option>
                <option value="DORADO CASTRO MIRTA GIOVANA">DORADO CASTRO MIRTA GIOVANA</option>
                <option value="ENRIQUEZ LEMUS CLAUDIA VERONICA">ENRIQUEZ LEMUS CLAUDIA VERONICA</option>
                <option value="GAETA BRACAMONTES MARIA TERESA DE JESUS">GAETA BRACAMONTES MARIA TERESA DE JESUS</option>
                <option value="GARAY GARCIA ADELA">GARAY GARCIA ADELA</option>
                <option value="GONZALEZ BARRERA ALDO SALVADOR">GONZALEZ BARRERA ALDO SALVADOR</option>
                <option value="HERNANDEZ FLORES CAROLINA">HERNANDEZ FLORES CAROLINA</option>
                <option value="LARRALDE RAMIREZ JORGE LUIS">LARRALDE RAMIREZ JORGE LUIS</option>
                <option value="LOPEZ ALEMAN MAYGUALIDA">LOPEZ ALEMAN MAYGUALIDA</option>
                <option value="LOPEZ RODRIGUEZ MARTHA PATRICIA">LOPEZ RODRIGUEZ MARTHA PATRICIA</option>
                <option value="LOPEZ SANCHEZ GRICELDA JUDITH">LOPEZ SANCHEZ GRICELDA JUDITH</option>
                <option value="MARTINEZ CAMPOS OSCAR">MARTINEZ CAMPOS OSCAR</option>
                <option value="MARTINEZ DE LA ROSA ARACELY">MARTINEZ DE LA ROSA ARACELY</option>
                <option value="PEREZ ROMAN ROSA ELVIA">PEREZ ROMAN ROSA ELVIA</option>
                <option value="PEREZ AGUILAR NORMA LILIANA">PEREZ AGUILAR NORMA LILIANA</option>
                <option value="PUENTE RIVAPALACIO TODY OSWALDO">PUENTE RIVAPALACIO TODY OSWALDO</option>
                <option value="REYES POSADA FLAVIO OSWALDO">REYES POSADA FLAVIO OSWALDO</option>
                <option value="ROJAS FLORES ELOIDA">ROJAS FLORES ELOIDA</option>
                <option value="SALAZAR CASTRO MARIA VERÓNICA">SALAZAR CASTRO MARIA VERÓNICA</option>
                <option value="VALLE QUIÑONES ANA GRISELDA">VALLE QUIÑONES ANA GRISELDA</option>
            </select>
            <x-input-error :messages="$errors->get('voto2')" class="mt-2" />
        </div>
        <!-- Voto3 -->
        <div class="mt-4">
            <x-input-label for="voto" :value="__('PERSONAL OPERATIVO 1')" />
            <select
                id="voto3"
                name="voto3"
                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-200 dark:text-gray-900 focus:border-green-400 dark:focus:border-green-400 focus:ring-green-400 dark:focus:ring-green-400 rounded-md shadow-sm"
            >
                <option value="Abstención">-- Selecciona una opción--</option>
                <option value="BORDA PACHECO AIDE">BORDA PACHECO AIDE</option>
                <option value="CAMPA SOSA JOSE ANTONIO">CAMPA SOSA JOSE ANTONIO</option>
                <option value="CORDERO MARTINEZ MIGUEL ANGEL">CORDERO MARTINEZ MIGUEL ANGEL</option>
                <option value="DE AVILA ALVARADO LUCIA">DE AVILA ALVARADO LUCIA</option>
                <option value="DE SANTIAGO QUIÑONEZ JOSE ANTONIO">DE SANTIAGO QUIÑONEZ JOSE ANTONIO</option>
                <option value="GONZALEZ PEREA SAUL">GONZALEZ PEREA SAUL</option>
                <option value="HERRERA LOPEZ JOSE ANTONIO">HERRERA LOPEZ JOSE ANTONIO</option>
                <option value="MACIAS HUIZAR SERGIO ALEJANDRO">MACIAS HUIZAR SERGIO ALEJANDRO</option>
                <option value="QUIROZ HERNANDEZ GERARDO">QUIROZ HERNANDEZ GERARDO</option>
                <option value="RAMIREZ JUAREZ ANTONIO">RAMIREZ JUAREZ ANTONIO</option>
                <option value="RIOS FELIX GERARDO DE JESUS">RIOS FELIX GERARDO DE JESUS</option>
                <option value="SALAS MORENO JUAN MANUEL">SALAS MORENO JUAN MANUEL</option>
                <option value="VILLA DE LUNA LUIS FERNANDO">VILLA DE LUNA LUIS FERNANDO</option>
            </select>
            <x-input-error :messages="$errors->get('voto3')" class="mt-2" />
        </div>
        
        <!-- Voto4 -->
        <div class="mt-4">
            <x-input-label for="voto4" :value="__('PERSONAL OPERATIVO 2')" />
            <select
                id="voto4"
                name="voto4"
                class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-200 dark:text-gray-900 focus:border-green-400 dark:focus:border-green-400 focus:ring-green-400 dark:focus:ring-green-400 rounded-md shadow-sm"
            >
                <option value="Abstención">-- Selecciona una opción--</option>
                <option value="ALVAREZ CARDOSO ROSA ISELA">ALVAREZ CARDOSO ROSA ISELA</option>
                <option value="CAMPA SOSA ADDI OCTAVIO">CAMPA SOSA ADDI OCTAVIO</option>
                <option value="DE LA TORRE GONZALEZ LUIS MANUEL">DE LA TORRE GONZALEZ LUIS MANUEL</option>
                <option value="GARCIA ARREDONDO ELBA LILIANA">GARCIA ARREDONDO ELBA LILIANA</option>
                <option value="JACOBO CHAIREZ LAZARO">JACOBO CHAIREZ LAZARO</option>
                <option value="JIMENEZ MARTINEZ SERGIO OCTAVIO">JIMENEZ MARTINEZ SERGIO OCTAVIO</option>
                <option value="JUAREZ GONZALEZ JAVIER">JUAREZ GONZALEZ JAVIER</option>
                <option value="MARQUEZ ESCOBEDO OSCAR">MARQUEZ ESCOBEDO OSCAR</option>
                <option value="MORALES GUARDADO JUAN FRANCISCO">MORALES GUARDADO JUAN FRANCISCO</option>
                <option value="RAMIREZ ESPINO MERCEDES">RAMIREZ ESPINO MERCEDES</option>
                <option value="RAYGOZA GOMEZ GABINO">RAYGOZA GOMEZ GABINO</option>
                <option value="RODRIGUEZ MARTINEZ JAVIER">RODRIGUEZ MARTINEZ JAVIER</option>
                <option value="TOVAR SIERRA CARLOS ANTONIO">TOVAR SIERRA CARLOS ANTONIO</option>
            
            </select>
            <x-input-error :messages="$errors->get('voto4')" class="mt-2" />
        </div>
        <div class="flex items-center mt-4">
            <x-primary-button class="w-full justify-center">
                {{ __('Votar') }}
            </x-primary-button>
        </div>
    </form>
</div>
