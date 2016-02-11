<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package   theme adaptable
 * @copyright 2015 Jeremy Hopkins (Coventry University)
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @copyright 2016 Fernando Acedo (3-bits.com) Traducción es-ES
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

// General.
$string['choosereadme'] = '
<div class="clearfix">
<div class="well">
 <h2>Adaptable</h2>
 <p><img class="img-polaroid" src="adaptable/pix/screenshot.png" /></p>
</div>
<div class="well">
 <h2>Créditos</h2>
 <h3>Acerca de...</h3>
 <p>Adaptable es una plantilla para Moodle, de dos columnas y tipo responsive, altamente personalizable y basada en la popular plantilla BCU.</p>
 <p>Esta plantilla está bajo licencia GPL (GNU General Public License). Puedes encontrar la licencia completa en: <a href="http://www.gnu.org/licenses/">http://www.gnu.org/licenses</a></p>
 <p>Modifícala / Mejórala / Compártela</p>
 <br>
 <p>Esta plantilla ha sido creada por:<br>
 Jeremy Hopkins (Coventry University)<br>
 Fernando Acedo (3-bits.com)<br>
 </p>
 <br>
 <h3>Informar de errores</h3>
 <p>Puedes informar de errores encontrados en esta plantilla a través del foro de moodle o en https://bitbucket.org/covuni/moodle-theme_adaptable/issues</p>
 <br>
 <h3>Documentación</h3>
 <br>
 <br>
 <h3>Demo</h3>
 <p>Puedes ver una demostración del sitio y descargar un archivo de instalación en <a href="http://3-bits.com/demo/adaptable">http://3-bits.com/demo/adaptable</a></p>
 <br>
<p>Traducción es-ES: Fernando Acedo (3-bits.com)</p>
</div>
</div>';

$string['pluginname'] = 'Adaptable';
$string['configtitle'] = 'Adaptable';

$string['region-middle'] = 'Centro';
$string['region-frnt-footer'] = 'Pie';
$string['region-side-post'] = 'Derecha';
$string['region-side-pre'] = 'Izquierda';
$string['frnt-footer'] = 'Los bloques situados en esta zona son solo visibles para los administradores.';


// Settings page headings ******************************************.
$string['settingsmaincolors'] = 'Colores principales';
$string['settingsheadercolors'] = 'Colores cabecera';
$string['settingsmenucolors'] = 'Colores menú';
$string['settingsmobilemenucolors'] = 'Colores menú móvil';
$string['settingsinfoboxcolors'] = 'Colores cuadro informativo principal';
$string['settingssecondinfoboxcolors'] = 'Colores cuadro informativo secundario';
$string['settingsmarketingcolors'] = 'Colores bloques moodle';
$string['settingsoverlaycolors'] = 'Colores bloques cursos';
$string['settingsnavbarcolors'] = 'Colores de la barra de navegación';
$string['settingsalertbox'] = 'Alertas';
$string['settingsbreadcrumbcolors'] = 'Colores de la ruta de navegación';
$string['settingsfootercolors'] = 'Colores del pie de página';
$string['settingsfonts'] = 'Fuentes';
$string['analyticssettings'] = 'Analítica Web';


// Admin Menu Strings.
$string['blocksettings'] = 'Bloques';
$string['frontpagealertsettings'] = 'Alertas';
$string['frontpageblocksettings'] = 'Bloques promocionales';
$string['frontpagetickersettings'] = 'Anuncios';
$string['frontpageslidersettings'] = 'Presentación diapositivas';
$string['frontpagecoursesettings'] = 'Cursos';

$string['frontpagesettingsheading'] = 'Página Inicial';
$string['frontpagedesc'] = 'Configurar la forma en que los cursos son mostrados en la página inicial.';
$string['frontpagerenderer'] = 'Bloques de cursos';
$string['frontpagerendererdesc'] = 'Configurar la forma en que los cursos son mostrados en la página inicial.';
$string['frontpagerendereroption1'] = 'Bloques';
$string['frontpagerendereroption2'] = 'Bloques sin incrustar';
$string['frontpagerendereroption3'] = 'Por defecto';
$string['frontpagerendereroption4'] = 'Tipo Coventry';


// Ticker **********************************************************.
$string['tickersettings'] = 'Anuncios';
$string['ticker'] = 'Anuncios';

$string['tickersettingsheading'] = 'Configura anuncios de la página de inicio. Ver posición <a href="./adaptable/pix/layout.png" target="_blank"> aquí</a>';
$string['tickerdesc'] = 'Aquí puedes configurar los anuncios de la página de inicio de tu moodle.
    Solo debes introducir una lista tipo HTML e incluir enlaces.
    Nota: No debes añadir etiquetas ul en la lista, solo li. Moodle tiende a añadir etiquetas ul.
    Si no funciona correctamente, cambia a modo HTML y comprueba que solo hay etiquetas li:
    <pre>
    &lt;li&gt;Anuncio 1.....&lt;/li&gt;
    &lt;li&gt;Anuncio 2.....&lt;/li&gt;
    </pre>
    <br>
    Puedes controlar diferentes secciones de anuncios dependiendo de un campo de perfil de usuario personalizado y así mostrar diferentes anuncios a diferentes perfiles.';

$string['tickerdefault'] = 'No hay anuncios para mostrar';

$string['enableticker'] = 'Activar los anuncios en la página de inicio';
$string['enabletickerdesc'] = 'Marcar para activar los anuncios en la página de inicio.';

$string['enabletickermy'] = 'Activar los anuncios en Mi Inicio / Área Personal';
$string['enabletickermydesc'] = 'Marcar para activar los anuncios en la página de Mi Inicio / Área Personal.';

$string['enabletickerc'] = 'Activar los anuncios en las páginas internas';
$string['enabletickercdesc'] = 'Marcar para activar los anuncios en las páginas internas.';

$string['tickertext1'] = 'Texto Anuncios 1';
$string['tickertext1desc'] = 'Añadir los anuncios en formato de lista HTML. Ver <a href="adaptable/README.txt">README.txt</a> para más información.';

$string['tickertext2'] = 'Texto Anuncios 2';
$string['tickertext2desc'] = 'Añadir los anuncios en formato de lista HTML para un segundo tipo de usuario. Ver <a href="adaptable/README.txt">README.txt</a> para más información.';

$string['tickertextprofilefield'] = 'Nombre del campo personalizado del perfíl Field Name=Value (opcional)';
$string['tickertextprofilefielddesc'] = 'Añade una regla de acceso usando un campo de perfil personalizado. Ejemplo: "usertype=student"';

$string['newstickercount'] = 'Número de secciones en el tablón de anuncios';
$string['newstickercountdesc'] = 'Define el número de multiple secciones de anuncios basadas en campos de perfil de usuario personalizados.';


// Slideshow *******************************************************.
$string['slideshowsettings'] = 'Presentación de diapositivas';
$string['slideshowsettingsheading'] = 'Personaliza la presentación de diapositivas de la página de inicio';
$string['slideshowdesc'] = 'Sube imagenes, añade enlaces y descripciones en las dispositivas de la presentación de la página de inicio.';

$string['p1'] = 'Imagen 1';
$string['p1desc'] = 'Añadir una imagen en la presentación de diapositivas de la página de inicio. Introducir la URL de la imagen.';

$string['p2'] = 'Imagen 2';
$string['p2desc'] = 'Añadir una imagen en la presentación de diapositivas de la página de inicio. Introducir la URL de la imagen.';

$string['p3'] = 'Imagen 3';
$string['p3desc'] = 'Añadir una imagen en la presentación de diapositivas de la página de inicio. Introducir la URL de la imagen.';

$string['p4'] = 'Imagen 4';
$string['p4desc'] = 'Añadir una imagen en la presentación de diapositivas de la página de inicio. Introducir la URL de la imagen.';

$string['p5'] = 'Imagen 5';
$string['p5desc'] = 'Añadir una imagen en la presentación de diapositivas de la página de inicio. Introducir la URL de la imagen.';

$string['p1cap'] = 'Imagen 1 caption';
$string['p1capdesc'] = 'Añadir el texto de la imagen. Usa una etiqueta H3 para el título.';

$string['p2cap'] = 'Imagen 2 caption';
$string['p2capdesc'] = 'Añadir el texto de la imagen. Usa una etiqueta H3 para el título.';

$string['p3cap'] = 'Imagen 3 caption';
$string['p3capdesc'] = 'Añadir el texto de la imagen. Usa una etiqueta H3 para el título.';

$string['p4cap'] = 'Imagen 4 caption';
$string['p4capdesc'] = 'Añadir el texto de la imagen. Usa una etiqueta H3 para el título.';

$string['p5cap'] = 'Imagen 5 caption';
$string['p5capdesc'] = 'Añadir el texto de la imagen. Usa una etiqueta H3 para el título.';

$string['p1url'] = 'URL Diapositiva 1';
$string['p1urldesc'] = 'Añadir la URL de la diapositiva 1.';

$string['p2url'] = 'URL Diapositiva 2';
$string['p2urldesc'] = 'Añadir la URL de la diapositiva 2.';

$string['p3url'] = 'URL Diapositiva 3';
$string['p3urldesc'] = 'Añadir la URL de la diapositiva 3.';

$string['p4url'] = 'URL Diapositiva 4';
$string['p4urldesc'] = 'Añadir la URL de la diapositiva 4.';

$string['p5url'] = 'URL Diapositiva 5';
$string['p5urldesc'] = 'Añadir la URL de la diapositiva 5.';

$string['slidermargintop'] = 'Margen superior de la presentación de diapositivas';
$string['slidermargintopdesc'] = 'Establece el margen superior de la presentación de diapositivas.';

$string['slidermarginbottom'] = 'Margen inferior de la presentación de diapositivas';
$string['slidermarginbottomdesc'] = 'Establece el margen inferior de la presentación de diapositivas.';

$string['sliderfullscreen'] = 'Presentación de diapositivas en ancho completo';
$string['sliderfullscreendesc'] = 'Muestra la presentación de diapositivas en todo el ancho de la pantalla.';

$string['slideroption2'] = 'Presentación de diapositivas tipo 2';
$string['slideroption2desc'] = 'Muestra la presentación de diapositivas utilizando el segundo estilo.';

$string['slideroption2color'] = 'Color de fondo de la presentación de diapositivas tipo 2';
$string['slideroption2colordesc'] = 'Configura el color de fondo de la presentación de diapositivas usando el segundo estilo.';

$string['slideroption2a'] = 'Color de fondo de las flechas de la presentación de diapositivas tipo 2';
$string['slideroption2adesc'] = 'Configura el color de fondo de las flechas de la presentación de diapositivas usando el segundo estilo.';


// Bloques promocionales & Cuadros Informativos *************************************.
$string['marketingsettings'] = 'Bloques promocionales';
$string['marketingsettingsheading'] = 'Personaliza los bloques promocionales que aparecen en la página de inicio';
$string['marketingdesc'] = 'Puedes añadir hasta 12 bloques promocionales en la página de inicio. Puedes ver ejemplos en el archivo
 <a href="/adaptable/README.txt" target="_blank">README.txt</a>';

$string['market1'] = 'Bloque promocional 1';
$string['market1desc'] = 'Añadir el código HTML.';

$string['market2'] = 'Bloque promocional 2';
$string['market2desc'] = 'Añadir el código HTML.';

$string['market3'] = 'Bloque promocional 3';
$string['market3desc'] = 'Añadir el código HTML.';

$string['market4'] = 'Bloque promocional 4';
$string['market4desc'] = 'Añadir el código HTML.';

$string['market5'] = 'Bloque promocional 5';
$string['market5desc'] = 'Añadir el código HTML.';

$string['market6'] = 'Bloque promocional 6';
$string['market6desc'] = 'Añadir el código HTML.';

$string['market7'] = 'Bloque promocional 7';
$string['market7desc'] = 'Añadir el código HTML.';

$string['market8'] = 'Bloque promocional 8';
$string['market8desc'] = 'Añadir el código HTML.';

$string['market9'] = 'Bloque promocional 9';
$string['market9desc'] = 'Añadir el código HTML.';

$string['market10'] = 'Bloque promocional 10';
$string['market10desc'] = 'Añadir el código HTML.';

$string['market11'] = 'Bloque promocional 11';
$string['market11desc'] = 'Añadir el código HTML.';

$string['market12'] = 'Bloque promocional 12';
$string['market12desc'] = 'Añadir el código HTML.';

$string['infobox'] = 'Cuadro informativo 1';
$string['infoboxdesc'] = 'Añadir el código HTML.';

$string['infoboxfullscreen'] = 'Cuadros informativos a pantalla completa';
$string['infoboxfullscreendesc'] = 'Marcar está opción para mostrar los cuadros informativos a ancho completo.';

$string['infobox2'] = 'Cuadro informativo 2';
$string['infobox2desc'] = 'Añadir el código HTML.';

$string['frontpagemarketenabled'] = 'Activar los bloques promocionales';
$string['frontpagemarketenableddesc'] = 'Activar los bloques promocionales en la pagina de inicio.';

$string['frontpagemarketoption'] = 'Bloques promocionales tipo Coventry';
$string['frontpagemarketoptiondesc'] = 'Establecer los bloques promocionales tipo Coventry. Configurar el color de esta opción en la página de colores.';


// Footer **********************************************************.
$string['footersettings'] = 'Pie de Página';
$string['footersettingsheading'] = 'Configurar el contenido del pie de página. Ver posición <a href="./adaptable/pix/layout.png" target="_blank"> aquí</a>';
$string['footerdesc'] = 'Configurar el contenido de los diferentes bloques que se muestran en el pie de página';

$string['showfooterblocks'] = 'Mostrar bloques en el pie de página';
$string['showfooterblocksdesc'] = 'Mostrar los bloques personalizados en el pie de página.';

$string['footerblocksplacement'] = 'Páginas donde mostrar los bloques del pie de página';
$string['footerblocksplacementdesc'] = 'Definir los lugares donde se deben mostrar los bloques del pie de página. Todo el sitio es la opción por defecto.';
$string['footerblocksplacement1'] = 'Todo el sitio';
$string['footerblocksplacement2'] = 'Página Inicial';
$string['footerblocksplacement3'] = 'Nunca';

$string['footnote'] = 'Copyright';
$string['footnotedesc'] = 'Añadir un texto de copyright al pie de página.';

$string['footer1header'] = 'Título del bloque 1';
$string['footer2header'] = 'Título del bloque 2';
$string['footer3header'] = 'Título del bloque 3';
$string['footer4header'] = 'Título del bloque 4';

$string['footer1desc'] = 'Introducir el título del bloque 1 del pie de página';
$string['footer2desc'] = 'Introducir el título del bloque 2 del pie de página';
$string['footer3desc'] = 'Introducir el título del bloque 3 del pie de página';
$string['footer4desc'] = 'Introducir el título del bloque 4 del pie de página';

$string['footer1content'] = 'Contenido del bloque 1';
$string['footer2content'] = 'Contenido del bloque 2';
$string['footer3content'] = 'Contenido del bloque 3';
$string['footer4content'] = 'Contenido del bloque 4';

$string['footer1contentdesc'] = 'Introducir el contenido del bloque de pie de página 1';
$string['footer2contentdesc'] = 'Introducir el contenido del bloque de pie de página 2';
$string['footer3contentdesc'] = 'Introducir el contenido del bloque de pie de página 3';
$string['footer4contentdesc'] = 'Introducir el contenido del bloque de pie de página 4';


// Moodle Docs link.
$string['moodledocs'] = 'Mostrar enlace a Moodle Docs';
$string['moodledocsdesc'] = 'Mostrar enlace a Moodle Docs en el pie de página.';


// NavBar **********************************************************.
$string['navbarmenusettings'] = 'Menú Navegación';
$string['navbarmenusettingsheading'] = 'Personalizar el menú de la barra de navegación';
$string['navbarmenusettingsdesc'] = 'Añadir menús en la barra de navegación.';

$string['navbarsettings'] = 'Barra de navegación';
$string['navbarsettingsheading'] = 'Personalizar la barra de navegación';
$string['navbardesc'] = 'Controlar los diferentes elementos a mostrar en la barra de navegación.';

$string['headerprofilefontsize'] = 'Tamaño fuente';
$string['headerprofilefontsizedesc'] = 'Cambiar el tamaño de la fuente de la barra de navegación.';

if ($CFG->version > 2015051100) {
    $string['enablemy'] = 'Área Personal';
    $string['enablemydesc'] = 'Mostrar el enlace al Área Personal.';
} else {
    $string['enablemy'] = 'Inicio';
    $string['enablemydesc'] = 'Mostrar el enlace a Inicio';
};

$string['enableprofile'] = 'Perfil usuario';
$string['enableprofiledesc'] = 'Mostrar el enlace del perfil de usuario.';

$string['enableeditprofile'] = 'Editar perfil';
$string['enableeditprofiledesc'] = 'Mostrar el enlace para editar el perfil del usuario.';

$string['enablebadges'] = 'Insignias';
$string['enablebadgesdesc'] = 'Mostrar el enlace de las insignias del usuario.';

$string['enablegrades'] = 'Calificaciones';
$string['enablegradesdesc'] = 'Mostrar el enlace de las calificaciones del usuario.';

$string['enablecalendar'] = 'Calendario';
$string['enablecalendardesc'] = 'Mostrar el enlace al calendario del usuario.';

$string['enableprivatefiles'] = 'Archivos privados';
$string['enableprivatefilesdesc'] = 'Mostrar el enlace a los archivos privados del usuario.';

$string['enablepref'] = 'Preferencias';
$string['enableprefdesc'] = 'Mostrar el enlace a las preferencias del usuario.';

$string['enablenote'] = 'Notificaciones';
$string['enablenotedesc'] = 'Mostrar el enlace página de notificaciones.';

$string['enableblog'] = 'Blogs del usuario';
$string['enableblogdesc'] = 'Mostrar el enlace a ls blogs del usurio.';

$string['enableposts'] = 'Mis entradas';
$string['enablepostsdesc'] = 'Mostrar el enlace a las entradas en los foros realizadas por el usuario.';

$string['enablefeed'] = 'Mis opiniones';
$string['enablefeeddesc'] = 'Mostrar el enlace a la página "Opiniones" - <i>Nota: esta opción requiere el <a href="https://moodle.org/plugins/report_myfeedback" target="blank">plugin My Feedback</a> instalado';

$string['myblogs'] = 'Mis Blogs';

$string['noenrolments'] = 'No hay matriculaciones.';

$string['enablemyhomedesc'] = 'Mostrar un enlace a {$a}';
$string['enableeventsdesc'] = 'Mostrar un enlace al calendario';
$string['enablemysitesdesc'] = 'Mostrar los cursos del usuario';
$string['enablethiscoursedesc'] = 'Mostrar las actividades del curso actual';

$string['usernavheading'] = 'Personalizar el menu de usuario';
$string['usernavdesc'] = 'Permite personalizar los elementos que aparecen Allows you to control all of the elements that appear in the user navigation dropdown.';
$string['enablehomedesc'] = 'Mostrar enlace a Inicio';

$string['enablehomeredirect'] = 'Activar redirect=0';
$string['enablehomeredirectdesc'] = 'Activa la opción redirect=0 para redirigir a la página inicial del sitio. Está opción puede  utilizarse en sitios que tienen el Área Personal como página inicial por defecto. Desactivada previene redireccionar a los usuarios a la página inicial y ser redirigidos al Área Personal';


// Colours *********************************************************.
$string['colorsettings'] = 'Colores';
$string['colorsettingsheading'] = 'Modifica los principales colores utilizados en la plantilla.';
$string['colordesc'] = 'Puedes seleccionar los colores que desees para ser usados por la plantilla. Usa la notacion HEX estandar. También puedes usar como valores <i>transparent</i> e <i>inherited.</i>';
$string['linkcolor'] = 'Color enlace';
$string['linkcolordesc'] = 'Establece el color de los enlaces.';

$string['linkhover'] = 'Color sobre enlace';
$string['linkhoverdesc'] = 'Establece el color cuando pasa el cursor sobre los enlaces.';

$string['backcolor'] = 'Color de fondo';
$string['backcolordesc'] = 'Establece el color de fondo de la plantilla.';

$string['maincolor'] = 'Color principal';
$string['maincolordesc'] = 'Establece el color principal del sitio.';

$string['footertextcolor'] = 'Color de texto del pie de página superior';
$string['footertextcolordesc'] = 'Establece el color usado por el texto en el pie de página superior.';

$string['footerbkcolor'] = 'Color del fondo del pie de página superior';
$string['footerbkcolordesc'] = 'Establece el color de fondo usado por el pie de página superior.';

$string['footertextcolor2'] = 'Color del texto del pie de página inferior';
$string['footertextcolor2desc'] = 'Establece el color usado por el texto en el pie de página inferior.';

$string['footerlinkcolor'] = 'Color de los enlaces del pie de página';
$string['footerlinkcolordesc'] = 'Establece el color de los enlaces del pie de página.';

$string['headerbkcolor'] = 'Color de fondo de la parte superior de la cabecera';
$string['headerbkcolordesc'] = 'Establece el color de fondo de la parte superior de la cabecera.';

$string['headerbkcolor2'] = 'Color de fondo de la parte inferior de la cabecera';
$string['headerbkcolor2desc'] = 'Establece el color de fondo de la parte inferior de la cabecera.';

$string['headertextcolor'] = 'Color de texto y enlaces de la parte superior de la cabecera';
$string['headertextcolordesc'] = 'Establece el color de texto y enlaces de la parte superior de la cabecera.';

$string['headertextcolor2'] = 'Color del texto y enlaces de la parte inferior de la cabecera';
$string['headertextcolor2desc'] = 'Establece el color de texto y enlaces de la parte inferior de la cabecera.';

$string['blockheadercolor'] = 'Color de fondo de la cabecera de los bloques';
$string['blockheadercolordesc'] = 'Establece el color de fondo de la cabecera de los bloques.';

$string['blockbackgroundcolor'] = 'Color de fondo de los bloques';
$string['blockbackgroundcolordesc'] = 'establece el color de fondo de los bloques.';

$string['blockheaderbackgroundcolor'] = 'Color del texto de los encabezados de los bloques';
$string['blockheaderbackgroundcolordesc'] = 'Establece el color del texto de los encabezados de los bloques.';

$string['blockbordercolor'] = 'Color del borde de los bloques';
$string['blockbordercolordesc'] = 'Establece el color del borde de los bloques.';

$string['blocklinkcolor'] = 'Color de enlace de los bloques';
$string['blocklinkcolordesc'] = 'Establece el color de los enlaces de los bloques.';

$string['blockheaderbordertop'] = 'Grueso del borde superior de los bloques';
$string['blockheaderbordertopdesc'] = 'Establece el grosor del borde superior de los bloques.';

$string['blockheaderborderleft'] = 'Grueso del borde izquierdo de los bloques';
$string['blockheaderborderleftdesc'] = 'Establece el grosor del borde izquierdo de los bloques.';

$string['blockheaderborderright'] = 'Grueso del borde derecho de los bloques';
$string['blockheaderborderrightdesc'] = 'Establece el grosor del borde derecho de los bloques.';

$string['blockheaderborderbottom'] = 'Grueso del borde inferior de los bloques';
$string['blockheaderborderbottomdesc'] = 'Establece el grosor del borde inferior de los bloques.';

$string['blockmainbordertop'] = 'Grueso del borde superior del bloque central';
$string['blockmainbordertopdesc'] = 'Establece el grosor del borde superior del bloque central.';

$string['blockmainborderleft'] = 'Grueso del borde izquierdo del bloque central';
$string['blockmainborderleftdesc'] = 'Establece el grosor del borde izquierdo del bloque central.';

$string['blockmainborderright'] = 'Grueso del borde derecho del bloque central';
$string['blockmainborderrightdesc'] = 'Establece el grosor del borde derecho del bloque central.';

$string['blockmainborderbottom'] = 'Grueso del borde inferior del bloque central';
$string['blockmainborderbottomdesc'] = 'Establece el grosor del borde inferior del bloque central.';

$string['blockheaderbordertopstyle'] = 'Estilo del borde de los bloques';
$string['blockheaderbordertopstyledesc'] = 'Establece el estilo del borde de los bloques laterales.';

$string['blockmainbordertopstyle'] = 'Estilo del borde del bloque central';
$string['blockmainbordertopstyledesc'] = 'Establece el estilo del borde de los bloques centrales.';

$string['blockheadertopradius'] = 'Radio de las esquinas superiores de los bloques laterales';
$string['blockheadertopradiusdesc'] = 'Radio de las esquinas superiores de los bloques laterales. Valor más alto es igual a efecto redondeado.';

$string['blockheaderbottomradius'] = 'Radio de las esquinas inferiores de los bloques laterales';
$string['blockheaderbottomradiusdesc'] = 'Radio de las esquinas inferiores de los bloques laterales. Valor más alto es igual a efecto redondeado.';

$string['blockmaintopradius'] = 'Radio de las esquinas superiores de los bloques centrales';
$string['blockmaintopradiusdesc'] = 'Radio de las esquinas superiores de los bloques centrales. Valor más alto es igual a efecto redondeado.';

$string['blockmainbottomradius'] = 'Radio de las esquinas inferiores de los bloques centrales';
$string['blockmainbottomradiusdesc'] = 'Radio de las esquinas inferiores de los bloques centrales. Valor más alto es igual a efecto redondeado.';

$string['marketblockbordercolor'] = 'Color del borde de los bloques promocionales';
$string['marketblockbordercolordesc'] = 'Establece el color del borde de los bloques promocionales.';

$string['marketblocksbackgroundcolor'] = 'Color de fondo de la región de los bloques promocionales.';
$string['marketblocksbackgroundcolordesc'] = 'Establece el color de fondo de la región de los bloques promocionales.';

$string['currentcolor'] = 'Color de realce de la sección actual';
$string['currentcolordesc'] = 'Establece el color de realce de la sección actual.';

$string['sectionheadingcolor'] = 'Color de fondo de la cabecera de sección';
$string['sectionheadingcolordesc'] = 'Establece el color de fondo de la cabecera del tema actual.';

$string['homebk'] = 'Imagen de fondo';
$string['homebkdesc'] = 'Sube la imagen de fondo para la plantilla.';

$string['editonbk'] = 'Color de fondo de los botones de edición y personalización activados';
$string['editonbkdesc'] = 'Establece el color de fondo de los botones de edición y personalización cuando están activados.';

$string['editoffbk'] = 'Color de fondo de los botones de edición y personalización desactivados';
$string['editoffbkdesc'] = 'Establece el color de fondo de los botones de edición y personalización cuando están desactivados.';

$string['dividingline'] = 'Color de la línea divisoria de la cabecera';
$string['dividinglinedesc'] = 'Establece el color de la línea divisoria de la cabecera. Usar el mismo color que la cabecera para eliminarla.';

$string['dividingline2'] = 'Color de la línea divisoria del pie de página';
$string['dividingline2desc'] = 'Establece el color de la línea divisoria del pie de página. Usar el mismo color que el pie para eliminarla.';

$string['navbarborder'] = 'Color del borde inferior de Navbar';
$string['navbarborderdesc'] = 'Establece el color del borde inferior de la barra de navegación.';

$string['navbarhover'] = 'Color Hover de la barra de navegaciòn';
$string['navbarhoverdesc'] = 'Establece el color de fondo al pasar el cursos sobre los items del menu de la barra de navegación.';

$string['breadcrumb'] = 'Color de fondo de la guia de exploración';
$string['breadcrumbdesc'] = 'Establece el color de fondo de la guia de exploración.';

$string['breadcrumbtextcolor'] = 'Color de texto de la guia de exploración';
$string['breadcrumbtextcolordesc'] = 'Establece el color de texto de la guia de exploración.';

$string['activebreadcrumb'] = 'Color de fondo de la guia de exploración activa';
$string['activebreadcrumbdesc'] = 'Establece el color de fondo de la guia de exploración activa.';

$string['menubkcolor'] = 'Color de fondo del menú principal';
$string['menubkcolordesc'] = 'Establece el color de fondo del menú principal.';

$string['menubordercolor'] = 'Color de la línea divisoria de la barra de navegación';
$string['menubordercolordesc'] = 'Establece el color de la linea divisoria de la barra de navegación.';

$string['menufontcolor'] = 'Color de texto del menú principal';
$string['menufontcolordesc'] = 'Establece el color del texto del menú principal.';

$string['menufonthovercolor'] = 'Color de texto hover del menú principal';
$string['menufonthovercolordesc'] = 'Establece el color del texto del menú principal al pasar el cursor sobre él.';

$string['mobilemenubkcolor'] = 'Color de fondo del menú para móvil';
$string['mobilemenubkcolordesc'] = 'Establece el color de fondo del menú principal en móviles (colapsado)';

$string['mobilemenufontcolor'] = 'Color del texto del menú para móvil';
$string['mobilemenufontcolordesc'] = 'Establece el color de texto del menú principal en móviles (colapsado)';


// Fonts ***********************************************************.
$string['fontsettings'] = 'Fuentes';
$string['fontsettingsheading'] = 'Establece las fuentes utilizadas por la plantilla.';
$string['fontdesc'] = 'Selecciona la fuente de <a href="https://www.google.com/fonts" target="_blank">Google Fonts</a> para el texto, los encabezamientos y el título. Selecciona también el juego de caracteres a usar (latin está incluido por defecto) e introduce el valor correcto para el grueso de fuente utilizado o no se mostrará.';

$string['fsize'] = 'Tamaño de fuente';
$string['fsizedesc'] = 'Establece el valor global del tamaño de fuente (en porcentaje. Usar solo valores númericos sin %. Por defecto es 85).';

// Fuente principal.
$string['fontname'] = 'Fuente principal';
$string['fontnamedesc'] = 'Establece la fuente principal. Selecciona defecto o una fuente de <a href="https://www.google.com/fonts" target="_blank">Google Fonts</a>.';

$string['fontcolor'] = 'Color de la fuente principal';
$string['fontcolordesc'] = 'Establece el color de la fuente principal.';

$string['fontweight'] = 'Grueso de la fuente principal';
$string['fontweightdesc'] = 'Establece el grueso de la fuente principal. Introducir un valor entre 100 y 900 dependiendo de la fuente utilizada.';

// Fuente encabezamientos.
$string['fontheadername'] = 'Fuente encabezamientos';
$string['fontheadernamedesc'] = 'Establece la fuente de los encabezamientos utilizados en la plantilla. Selecciona default o una fuente de <a href="https://www.google.com/fonts" target="_blank">Google Fonts</a>.';

$string['fontheadercolor'] = 'Color de la fuente de encabezamientos';
$string['fontheadercolordesc'] = 'Establece el color de la fuente de los encabezamientos utilizados en la plantilla.';

$string['fontheaderweight'] = 'Grueso de la fuente de encabezamientos';
$string['fontheaderweightdesc'] = 'Establece el grueso de la fuente de los encabezamientos. Introducir un valor entre 100 y 900 dependiendo de la fuente utilizada.';

// Fuente titulo.
$string['fonttitlename'] = 'Fuente del título del sitio';
$string['fonttitlenamedesc'] = 'Establece la fuente del título del sitio situado en la cabecera. Selecciona default o una fuente de <a href="https://www.google.com/fonts" target="_blank">Google Fonts</a>.';

$string['fonttitlecolor'] = 'Color de la fuente del título del sitio';
$string['fonttitlecolordesc'] = 'Establece el color de la fuente del título del sitio situado en la cabecera.';

$string['fonttitleweight'] = 'Grueso de la fuente del título del sitio';
$string['fonttitleweightdesc'] = 'Establece el grueso de la fuente del título del sitio. Introducir un valor entre 100 y 900 dependiendo de la fuente utilizada.';

$string['fonttitlesize'] = 'Tamaño de la fuente del título del sitio';
$string['fonttitlesizedesc'] = 'Tamaño de la fuente del título del sitio situado en la cabecera. Introducir un valor decimal,, por ejemplo: 24px';

$string['fontsubset'] = 'Juego de caracteres de Google Fonts';
$string['fontsubsetdesc'] = 'Seleccionar el juego de caracteres de Google Fonts a usar, además del latin ya incluido por defecto. Se aplicará a toda la plantilla.';

$string['menufontsize'] = 'Tamaño de la fuente del Navbar';
$string['menufontsizedesc'] = 'Establece el tamaño de la fuente utilizada en la barra de navegación.';


// Buttons *********************************************************.
$string['buttonsettings'] = 'Botones';
$string['buttonsettingsheading'] = 'Personalizar los botones.';
$string['buttondesc'] = 'personaliza a forma y colores de los botones utilizados en la plantilla.';

$string['buttonradius'] = 'Radio de las esquinas';
$string['buttonradiusdesc'] = '0 = esquinas cuadradas. Un valor más alto es igual a esquinas más redondeadas.';

$string['buttoncolor'] = 'Colores de los botones';
$string['buttoncolordesc'] = 'El color de los botones principales.';

$string['buttonhovercolor'] = 'Color Hover de los botones';
$string['buttonhovercolordesc'] = 'Color del botón al pasar el cursor por encima.';

$string['buttontextcolor'] = 'Color del texto de los botones';
$string['buttontextcolordesc'] = 'Color del texto de los botones.';

$string['editfont'] = 'Color del texto de los botones de <i>Edición</i> y <i>Personalizar esta página</i>';
$string['editfontdesc'] = 'establece el color del texto de los botones de <i>Edición</i> y <i>Personalizar esta página</i>';

$string['editverticalpadding'] = 'Espaciado vertical de los botones de edición';
$string['edithorizontalpadding'] = 'Espaciado horizontal de los botones de edición';
$string['edittopmargin'] = 'Margen superior de los botones de edición';


// Login.
$string['buttonlogincolor'] = 'Color del botón Entrar';
$string['buttonlogincolordesc'] = 'Color del botón Entrar.';

$string['buttonloginhovercolor'] = 'Color Hover del botón Entrar';
$string['buttonloginhovercolordesc'] = 'Color del botón Entrar al pasar el cursos por encima.';

$string['buttonlogintextcolor'] = 'Color del texto del botón Entrar';
$string['buttonlogintextcolordesc'] = 'Color del texto del botón Entrar.';

$string['buttonloginpadding'] = 'Separacion del texto del botón Entrar';
$string['buttonloginpaddingdesc'] = 'Separacion alrededor del texto del botón Entrar. Número más alto = Botón más grande.';

$string['buttonloginheight'] = 'Altura del botón Entrar';
$string['buttonloginheightdesc'] = 'Altura del botón Entrar. Solo si se utiliza el formulario de entrada en la cabecera.';

$string['buttonloginmargintop'] = 'Margen superior del botón Entrar';
$string['buttonloginmargintopdesc'] = 'Permite posicionar el boton Entrar si se han cambiado los valores indicados anteriormente.';

$string['logintextbutton'] = 'Entrar';


// Header ***********************************************************.
$string['headersettings'] = 'Cabecera';
$string['headersettingsheading'] = 'Personalización de la cabecera.';
$string['headerdesc'] = 'Mostrar Alertas para avisar a los usuarios, controlar la barra de navegación, mostrar el título del sitio o el logo son algunas de las opciones de la cabecera.';

$string['enableheading'] = 'Nombre del curso';
$string['enableheadingdesc'] = 'Establece el mode de visualización del título del curso en la cabecera.';

$string['breadcrumbtitle'] = 'Nombre del curso en la guía de exploración';
$string['breadcrumbtitledesc'] = 'Establece el modo de visualización del título del curso en la guía de exploración.';

$string['usernavheading'] = 'Personaliza el menú desplegable del perfíl de usuario.';

$string['menusettings'] = 'Menús de cabecera';
$string['menusettingsheading'] = 'Personaliza los menús de la cabecera superior.';

$string['logo'] = 'Logo';
$string['logodesc'] = 'Sube el archivo con la imagen del logo (170 x 80px max.). Formatos admitidos: .png, .jpg y .gif';

$string['favicon'] = 'Favicon';
$string['favicondesc'] = 'Sube el archvo favicon.ico';

$string['enableavailablecourses'] = 'Mostrar el texto Cursos Disponibles';
$string['enableavailablecoursesdesc'] = 'Mostrar el texto <i>Cursos Disponibles</i> sobre el listado de cursos en la página inicial.';

$string['thiscourse'] = 'Este curso';

$string['loadtime'] = 'Página cargada en ';

$string['loadingcolor'] = 'Color del cargador';
$string['loadingcolordesc'] = 'Color del cargador situado en la parte superior de la página.';

$string['sitetitle'] = 'Mostrar título del sitio';
$string['sitetitledesc'] = 'Mostrar / Ocultar el título del sitio.';

$string['sitetitletext'] = 'Título del sitio';
$string['sitetitletextdesc'] = 'El título del sitio que se mostrará en la cabecera.';

$string['frontpagelogin'] = 'Formulario de entrada en la cabecera';
$string['frontpagelogindesc'] = 'Mostrar el formulario de entrada en la parte superior de la cabecera. En caso contrario, se mostrará solo el botón.';

$string['hideblocks'] = 'Ocultar bloques';
$string['showblocks'] = 'Mostrar bloques';
$string['fullscreen'] = 'Pantalla completa';
$string['standardview'] = 'Vista estándar';

$string['viewselect'] = 'Pantalla completa como vista por defecto';
$string['viewselectdesc'] = 'Establecer la vista por defecto a pantalla completa (cuando la opción zoom está activada)';

$string['enablezoom'] = 'Activar Zoom';
$string['enablezoomdesc'] = 'Permite a los usuarios cambiar entre pantalla completa o ancho fijo de pantalla.';

$string['enableshowhideblocks'] = 'Activar Mostrar/Ocultar bloques';
$string['enableshowhideblocksdesc'] = 'Permite a los usuarios mostrar / ocultar los bloques laterales.';

$string['fullscreenwidth'] = 'Ancho de pantalla completa';
$string['fullscreenwidthdesc'] = 'Establece el ancho máximo de la pantalla en modo pantalla completa / zoom.';


// Help Links ******************************************************.
$string['enablehelp'] = 'Enlace de ayuda';
$string['enablehelpdesc'] = 'Añade un enlace de ayuda en la barra de navegación.';

$string['helptitle'] = 'Ayuda por perfíl';
$string['helptitle2'] = 'Enlace de ayuda dependiente del campo personalizado en el perfíl.';

$string['helpprofilefield'] = 'Campo personalizado para la ayuda (opcional)';
$string['helpprofilefielddesc'] = 'Añade una regla de acceso usando un campo de perfil personalizado. Ejemplo: "usertype=student"';


// Courses Overlay *************************************************.
$string['rendereroverlaycolor'] = 'Color superpuesto';
$string['rendereroverlaycolordesc'] = 'El color superpuesto sobre el bloque de curso cuando "Bloques Superpuestos" está seleccionado.';

$string['rendereroverlayfontcolor'] = 'Color de texto en la superposición';
$string['rendereroverlayfontcolordesc'] = 'El color de la fuente cuando pasa el cursor por encima del bloque del curso y "Bloques Superpuestos" está activado.';

$string['covbkcolor'] = 'Color de fondo en los bloques estilo Coventry';
$string['covbkcolordesc'] = 'Establece el color de superposición de los bloques cuando se ha seleccionado el estilo Coventry.';

$string['covfontcolor'] = 'Color del texto en los bloques estilo Coventry';
$string['covfontcolordesc'] = 'Establece el color del texto en los bloques estilo Coventry.';

$string['covhidebutton'] = 'Mostrar el botón del curso en los bloques estilo Coventry';
$string['covhidebuttondesc'] = 'Mostrar / ocultar el botón del curso cuando se utiliza el estilo Coventry.';

$string['frontpagerendererdefaultimage'] = 'Imagen por defecto para los cursos';
$string['frontpagerendererdefaultimagedesc'] = 'Sube la imagen que se utilizará por defecto en los cursos que no dispngan de ella.  (solo se aplica en el estilo "Bloques Superpuestos")';

$string['coursetitlemaxwidth'] = 'Ancho máximo del título del curso';
$string['coursetitlemaxwidthdesc'] = 'Establece el ancho máximo del título del curso. (en pixels)';

$string['tilesshowcontacts'] = 'Mostrar los contactos del curso';
$string['tilesshowcontactsdesc'] = 'Muestra / Oculta los contactos del curso.';

$string['tilesbordercolor'] = 'Color del borde de los bloques de cursos';
$string['tilesbordercolordesc'] = 'establece el color del borde de los bloques de cursos.';

$string['tilescontactstitle'] = 'Mostrar el rol de los contactos del curso';
$string['tilescontactstitledesc'] = 'Muestra / Oculta el rol del contacto en el curso. Si no se muestra, se mostrará una imagen para cada contacto.';

$string['tilesshowallcontacts'] = 'Mostrar todos los contactos del curso';
$string['tilesshowallcontactsdesc'] = 'Muestra todos los contactos del curso o solo el principal.';


// Alerts **********************************************************.
// Alert Box Enable.
$string['enablealert'] = 'Activar Alerta {$a}';
$string['enablealertdesc'] = 'Activar la alerta {$a}.';

// Alert Box Generic Strings.
$string['alerttype'] = 'Tipo de Alerta';
$string['alerttypedesc'] = 'Selecciona el tipo de alerta: info (azul), aviso (amarillo) o anuncio (verde)';

$string['alerttext'] = 'Texto de la Alerta';
$string['alerttextdesc'] = 'Introduce el texto a mostrar en la alerta.';

$string['enablealertcoursepages'] = 'Activar Alertas en las páginas de los cursos';
$string['enablealertcoursepagesdesc'] = 'Activar las alertas también en las páginas de los cursos.';

$string['enablealertstriptags'] = 'Eliminar etiquetas HTML del texto de la Alerta';
$string['enablealertstriptagsdesc'] = 'Si se activa, se eliminarán las etiquetas HTML del texto. Si está desactivado, se permitirá introducir etiquetas HTML por ejemplo para añadir enlaces.';

$string['alertkeyvalue'] = 'Clave de identificación de la Alerta';
$string['alertkeyvalue_details'] = 'Esta clave identifica la alerta y permite el control de la eliminación de la alerta en la pantalla por parte del usuario. Si se cambia la clave, los usuarios volverán a ver la alerta de nuevo.';

$string['alertsettingsgeneral'] = 'Configuración Alertas';
$string['alertsettings'] = 'Alerta {$a}';

$string['alertcount'] = 'Contador de Alertas';
$string['alertcountdesc'] = 'Número de alertas a crear a continuación.';

$string['alertsettingsheading'] = 'Personalizar las Alertas';
$string['alertdesc'] = 'Introduce y personaliza el texto de las Alertas mostradas en la parte superior de la pantalla. Es posible crear más de una para mostrarse a diferentes tipos de usuarios. También existe la opción de mostrar las alertas en la página inicial y en las páginas de los cursos.';

// Alerts Types.
$string['alertinfo'] = 'Info';
$string['alertinfodesc'] = 'Muestra un mensaje de información.';

$string['alertwarning'] = 'Warning';
$string['alertinfodesc'] = 'Muestra un mensaje de aviso.';

$string['alertannounce'] = 'Announcement';
$string['alertinfodesc'] = 'Muestra un mensaje de anuncio.';

$string['alertprofilefield'] = 'Campo de usuario personalizado Nombre=Valor (opcional)';
$string['alertprofilefielddesc'] = 'Añade una regla de acceso usando un campo de perfil personalizado. Ejemplo: "usertype=student"';

// Alert Access - Visibility.
$string['alertaccessglobal'] = 'Visible para todo el mundo';
$string['alertaccessusers'] = 'Visible para usuarios';
$string['alertaccessadmins'] = 'Visible para administradores';
$string['alertaccessprofile'] = 'Añadir restricción por campo personalizado';

$string['alertaccess'] = 'Visibilidad de la Alerta';
$string['alertaccessdesc'] = 'Establece la visibilidad de la Alerta según su tipo. Nota: Si se usa "Añadir restricción por campo personalizado" necesitrás añadir el campo personalizado de usuario.';


// Mobile **********************************************************.
$string['mobilesettings'] = 'Configuración para dispositivos Móviles';
$string['mobilesettingsheading'] = 'Configura la plantilla para ser visualizada en dispositivos móviles.';

$string['coursetitlepaddingtop'] = 'Separación superior del título del curso';
$string['coursetitlepaddingtopdesc'] = 'Establece la separación superior (en pixels) del título del curso.';

$string['layoutmobilesettings'] = 'Configuración Móvil';
$string['layoutmobilesettingsdesc'] = 'Configuración especifica para dispositivos móviles.';

$string['hidealertsmobile'] = 'Ocultar Alertas';
$string['hidealertsmobiledesc'] = 'Oculta las alertas de la parte superior de la pantalla (si están activadas)';

$string['hidesocialmobile'] = 'Ocultar los iconos sociales';
$string['hidesocialmobiledesc'] = 'Oculta los iconos sociales (si están activados)';

$string['hidecoursetitlemobile'] = 'Oculta el título del curso';
$string['hidecoursetitlemobiledesc'] = 'Oculta el título del curso y del sitio';

$string['socialboxpaddingtopmobile'] = 'Separación superior del bloque de iconos sociales';
$string['socialboxpaddingbottommobile'] = 'Establece la separación superior del bloque de iconos sociales';

$string['hidelogomobile'] = 'Ocultar logo';
$string['hidelogomobiledesc'] = 'Ocultar el logo.';

$string['hideheadermobile'] = 'Ocultar la cabecera';
$string['hideheadermobiledesc'] = 'Oculta la cabecera, logo, iconos sociales y búsqueda.';

$string['hidebreadcrumbmobile'] = 'Ocultar ruta de navegación';
$string['hidebreadcrumbmobiledesc'] = 'Oculta la ruta de navegación.';

$string['hidepagefootermobile'] = 'Ocultar pie de página';
$string['hidepagefootermobiledesc'] = 'Oculta el pie de página.';


// Layout **********************************************************.
$string['layoutsettings'] = 'Disposición';
$string['layoutdesc'] = 'Configuración de la disposición por defecto.';
$string['layoutsettingsheading'] = 'Controlar las diferentes disposiciones de la plantilla.';

$string['blockside'] = 'Posición de los bloques';
$string['blocksidedesc'] = 'Mostrar los bloques en la columna derecha o izquierda.';

$string['blockicons'] = 'Mostrar iconos en los bloques';
$string['blockiconsdesc'] = 'Mostrar / Ocultar un icono relacionado con el tipo de bloque al lado del encabezamiento.';

$string['leftblocks'] = 'Izquierda';
$string['rightblocks'] = 'Derecha';

$string['helptarget'] = 'Nueva ventana de ayuda';
$string['helptargetdesc'] = 'Abrir la ayuda en la misma ventana o en una nueva.';

$string['hideinforum'] = 'Ocultar Menús de Ayuda y Herramientas en los foros';
$string['hideinforumdesc'] = 'Si se utiliza un ancho fijo de pantalla es posible que los menús salten a la línea inferior. Activando esta opción se ocultan los menús en las páginas de foros.';

$string['targetnewwindow'] = 'Nueva ventana';
$string['targetsamewindow'] = 'Misma ventana';

$string['toolsmenu2'] = '2º Menu Herramientas';
$string['toolsmenu2desc'] = 'Puedes configurar los items de los menús de herramientas. Cada línea consiste en: titulo del item, enlace  (opcional), indicador de función (opcional) y el código de idioma o una lista de códigos separada por comas (opcional, para mostrar el item dependiendo del idioma del usuario) separado por una linea vertical (|). También pueden añadirse sub-items usando guiones. Por ejemplo:
<pre>
Moodle community|https://moodle.org
-Moodle free support|https://moodle.org/support
-Moodle development|https://moodle.org/development
--Moodle Docs|http://docs.moodle.org|Moodle Docs
--Moodle Docs en español|http://docs.moodle.org/es|Documentación en español|es
Moodle.com|http://moodle.com/
</pre>';

$string['toolsmenulabel'] = 'Herramientas';
$string['toolsmenulabel2'] = 'Herramientas 2';
$string['events'] = 'Eventos';
$string['mysites'] = 'Mis Cursos';
$string['people'] = 'Gente';
$string['help'] = 'Ayuda';

$string['navbarborder'] = 'Color del borde de la parte inferior de la barra de navegación';
$string['navbarborderdesc'] = 'Color del borde de la parte inferior de la barra de navegación.';

$string['navbarhover'] = 'Color hover del boton del navbar';
$string['navbarhoverdesc'] = 'Color de los botones de la barra de navegación al desplazar el cursor por encima.';

$string['showfooterblocks'] = 'Mostrar bloques en el pie de página';
$string['showfooterblocksdesc'] = 'Mostrar / Ocultar los bloques personalizables del pie de página.';

$string['footerblocksplacement'] = 'Posición de los bloques del pie de página';
$string['footerblocksplacementdesc'] = 'Páginas donde mostrar los bloques de pie de página. Sitewide (todo el sitio) es la opción por defecto.';
$string['footerblocksplacement1'] = 'Sitewide';
$string['footerblocksplacement2'] = 'Homepage_only';
$string['footerblocksplacement3'] = 'Never';

$string['breadcrumb'] = 'Color de fondo de la ruta de navegación';
$string['breadcrumbdesc'] = 'Establece el color de fondo de la ruta de navegación.';

$string['breadcrumbtextcolor'] = 'Color del texto de la ruta de navegación';
$string['breadcrumbtextcolordesc'] = 'Establece el color del texto de la ruta de navegación.';

$string['activebreadcrumb'] = 'Color de fondo de la ruta de navegación activa';
$string['activebreadcrumbdesc'] = 'Establece el color de fondo de la ruta de navegación activa.';

$string['menufontsize'] = 'Tamaño de fuente de la barra de navegación';
$string['menufontsizedesc'] = 'Establece el tamaño de fuente de la barra de navegación.';

$string['newmenu1trigger'] = 'Palabra clave para el Menú desplegable superior';
$string['newmenu1triggerdesc'] = 'Establece una palabra clave para el Menú desplegable superior. Puedes utilizar los iconos de Font Awesome.';

$string['menusheading'] = 'Configurar Navegación para los menús de la parte superior de la cabecera';
$string['menustitledesc'] = 'los menús de herramientas (en la barra de navegación) y los menús superiores (cabecera superior) pueden ser restringidos dependiendo de un campo personalizado del perfíl de usuario (opcional). Los menús siguen el formato de los menús estandar de moodle:
<pre>
Moodle community|https://moodle.org
-Moodle free support|https://moodle.org/support
-Moodle development|https://moodle.org/development
--Moodle Docs|http://docs.moodle.org|Moodle Docs
--German Moodle Docs|http://docs.moodle.org/de|Documentation in German|de
Moodle.com|http://moodle.com/
</pre>
';

$string['menusession'] = 'Almacenar los detalles de acceso en la sesión';
$string['menusessiondesc'] = 'Se aconseja activar esta opción para optimizar el rendimiento en caso de utilizar varios menúes. Mantener desactivado para pruebas.';

$string['disablecustommenu'] = 'Desactivar el menú personalizado de Moodle';
$string['disablecustommenudesc'] = 'Desactiva el menú personalizado de Moodle en la barra de navegación (seguirá funcionando en otras plantillas instaladas)';

$string['menusessionttl'] = 'Tiempo (minutos) de almacenamiento del acceso a los menús por sesión';
$string['menusessionttldesc'] = 'Número de minutos antes de reiniciar la sesión.';


// Tool menus ******************************************************.
$string['newmenudesc'] = 'Configurar los enlaces mostrados bajo el menú de la cabecera superior.';
$string['newmenufield'] = 'Custom Profile Field Name=Value (optional)';
$string['newmenufielddesc'] = 'Añade una regla de acceso usando un campo de perfil personalizado. Ejemplo: "usertype=student"';
$string['newmenurequirelogin'] = 'Require Entrar';
$string['newmenurequirelogindesc'] = 'Si está activado este menú será visible a los usuarios que autenticados';

$string['menusdesc'] = '';

$string['newmenu2trigger'] = 'Palabra clave para el Menú desplegable superior';
$string['newmenu2triggerdesc'] = 'Establece la palabra clave para el Menú desplegable superior Set a Top Menu Dropdown 2 trigger word.';

$string['enablemenus'] = 'Activar Menús';
$string['enablemenusdesc'] = 'Por motivos de rendimiendo, se recomienda no activarlo si no se utilizan los menús.';

$string['disablemenuscoursepages'] = 'Desactivar menús en las páginas de los cursos';
$string['disablemenuscoursepagesdesc'] = 'Activando esta opción los menús solo se mostrarán en las páginas del sitio, la página inicial, el Área Personal, etc. y no se mostrará en las páginas de los cursos.';

$string['menuuseroverride'] = 'Permitir la anulación por usuario';
$string['menuuseroverridedesc'] = 'Esta configuración controla el uso de los menus a través del perfíl de usuario. Para usar esta función, se ha de crear un campo personalizado de usuario tipo lista con los siguientes valores:
<pre>1. Sitewide (mostrará el menú en todo el sitio)
2. Homepages Only (mostrará el menú solo en la página principal)
3. Hidden (no se mostrarán los menús)</pre>
NO debes utilizar la opción "Desactivar menús en las páginas de los cursos" junto a los campos de perfíl. En su lugar, selecciona  "Homepages Only".

Nota: Los usuarios deberán salir de moodle y volver a entrar para que los cambios hagan efecto. Puede indicarse una nota al crear el campo personalizado.';

$string['menuoverrideprofilefield'] = 'Nombre del campo personalizado';
$string['menuoverrideprofilefielddesc'] = 'El nombre del campo de perfíl "list" usado por la anulacion por usuario.';
$string['menuoverrideprofilefielddefault'] = 'topmenusettings';

$string['topmenuscount'] = 'Número de menús superiores';
$string['topmenuscountdesc'] = 'Establece el número de menús superiores que quieres añadir en la cabecera.';

$string['menusheadingvisibility'] = 'Configuración para la visibilidad del menú superior';
$string['menusheadingvisibilitydesc'] = 'La siguiente configuración permite controlar donde mostrar los menús y opcionalmente permitir a los usuarios su personalización.';

$string['newmenuheading'] = 'Menu superior';
$string['newmenu'] = 'Menú superior desplegable';
$string['newmenutitle'] = 'Título menú superior';
$string['newmenutitledesc'] = 'El título del menú aparecerá en la cabecera del sitio';
$string['newmenutitledefault'] = 'Menú';

$string['enabletoolsmenus'] = 'Activar menús de herramientas';
$string['enabletoolsmenusdesc'] = 'Por razones de rendimiento se recomienda dejarlo desactivado si no se utilizan.';

$string['toolsmenuheading'] = 'Menús herramientas (en la barra de navegación)';
$string['toolsmenuheadingdesc'] = 'Puedes configurar los enlaces a mostrar en el menú de herramientas (en la barra de navegación).
 este formato es similar al usado por los menús personalizados de moodle pero permite añadir los iconos Font Awesome:
<pre>
&lt;span class=&quot;fa fa-video-camera&quot;&gt;&lt;/span&gt; Record Screen|http://google.co.uk|Record Screen
&lt;span class=&quot;fa fa-picture-o&quot;&gt;&lt;/span&gt; ThinkStock|http://google.co.uk|ThinkStock
&lt;span class=&quot;fa fa-clock-o&quot;&gt;&lt;/span&gt; Exam Clock|http://google.co.uk|Exam Clock
</pre><br />';

$string['toolsmenuscount'] = 'Número de menús de herramientas';
$string['toolsmenuscountdesc'] = 'Establece el número de menús de herramientas que quieres a la barra de navegación.';

$string['toolsmenu'] = 'Menú de herramientas desplegable';
$string['toolsmenudesc'] = 'Añade un menú desplegable en la barra de navegación.';

$string['toolsmenutitle'] = 'Título menú de herramientas';
$string['toolsmenutitledefault'] = 'Herramientas';
$string['toolsmenutitledesc'] = 'Añade el título a mostrar en la barra de navegación.';

$string['toolsmenulabel'] = 'Menu Herramientas';

$string['toolsmenufield'] = 'Nombre del campo personalizado del perfíl Field Name=Value (opcional)';
$string['toolsmenufielddesc'] = 'Añade una regla de acceso usando un campo de perfil personalizado. Ejemplo: "usertype=student"';


// Social settings *************************************************.
$string['socialsettings'] = 'Redes sociales';
$string['socialheading'] = 'Configuración de los iconos de redes sociales';
$string['socialtitledesc'] = 'Puedes desactivar la búsqueda y activar los iconos de redes sociales en su lugar.
Para configurar los iconos, introduce una lista delimitada en el campo "Lista de iconos sociales".
El formato debe ser:

url|titulo|icono

Ejemplo:
<pre>
http://localhost/moodle/course/search.php|Buscar en Moodle|fa-search
http://facebook.com/|Facebook|fa-facebook-square
http://twitter.com/|Twitter|fa-twitter-square
http://instagram.com|Instagram|fa-instagram
http://example.com|Mi Web|fa-globe
</pre>
<br>
El listado de iconos se encuentra en: <a href="http://fortawesome.github.io/Font-Awesome/icons">http://fortawesome.github.io/Font-Awesome/icons</a>';

$string['socialset'] = 'Añadir iconos sociales y ocultar la barra de búsqueda';
$string['socialsetdesc'] = 'Marca esta casilla para ocultar la búsqueda y añadir los iconos de redes sociales en el mismo lugar.';

$string['socialsize'] = 'Configurar tamaño de los iconos sociales';
$string['socialsizemobile'] = 'Configurar tamaño de los iconos sociales en móviles';
$string['socialpaddingtop'] = 'Ajustar la separación debajo los iconos sociales (altera la posición vertical)';

$string['socialtarget'] = 'Formato de apertura de la ventana de enlaces sociales';
$string['socialtargetdesc'] = 'Abrir la red social en la misma venta o en una nueva';

$string['socialiconlist'] = 'Lista de iconos sociales';
$string['socialiconlistdesc'] = 'Introducir una lista delimitada para configurar los iconos de redes sociales que necesites usando el formato: url|titulo|icono';


// Analytics.
$string['analyticssettingsheading'] = 'Configurar Google Analytics';
$string['analyticssettingsdesc'] = 'Puedes configurar múltiples códigos para Google Analytics y enlazarlos con diversos campos personalizados.';

$string ['enableanalytics'] = 'Activar Google Analytics';
$string ['enableanalyticsdesc'] = 'Activar Google Analytics en el sitio.';

$string ['analyticstext'] = 'Analytics ID';
$string ['analyticstextdesc'] = 'Introducir el código de Google Analytics.';

$string['analyticscount'] = 'Número de campos de perfil';
$string['analyticscountdesc'] = 'Número de campos personalizados a introducir en el área inferior.';

$string ['analyticsprofilefield'] = 'Nombre del campo personalizado del perfíl Field Name=Value (opcional)';
$string ['analyticsprofilefielddesc'] = 'Añade una regla de acceso usando un campo de perfil personalizado. Ejemplo: "usertype=student"';


// Custom CSS.
$string['customcssjssettings'] = 'CSS y JS personalizado';
$string['genericsettingsheading'] = 'Introduce tu propio código CSS y Javascript';
$string['genericsettingsdescription'] = 'Introduce tu propio código CSS y Javascript.';

$string['customcss'] = 'CSS personalizado';
$string['customcssdesc'] = 'Introduce las reglas CSS.';

$string['jssection'] = 'Javascript personalizado';
$string['jssectiondesc'] = 'Introduce el código Javascript.';
