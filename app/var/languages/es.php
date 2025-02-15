<?php

    /**
     * Need to keep this as array() vs. [] for Transilex
     */
    $messages = array(
        'language_text'                   => 'Inglés',
        'download'                        => 'Descargar',
        'documentation'                   => 'Documentación',
        'forum'                           => 'Foros',
        'blog'                            => 'Blog',
        'support'                         => 'Soporte',
        'donate'                          => 'Donaciones',
        'store'                           => 'Tienda',
        'github'                          => 'GitHub',
        'phalcon_description'             => "<strong>Phalcon</strong> es un framework web implementado como una extensión C que ofrece un <a href=':1:'>alto rendimiento</a> y consume menos recursos",
        'the_fastest_php_framework'       => 'El framework para PHP<br />más rápido',
        'try_online'                      => 'Pruébalo Online',
        'see_screencasts'                 => 'Ver Screencasts',
        'everything_you_need_upper'       => 'TODO LO QUE NECESITAS',
        'full_mvc_applications'           => "Aplicaciones <a href=':1:'>MVC</a> completas",
        'single_module'                   => 'Uni-Modulo',
        'multi_module'                    => 'Multi-Módulo',
        'micro_applications'              => 'Micro Aplicaciones',
        'orm'                             => 'ORM',
        'transactions'                    => 'Transacciones',
        'behaviors'                       => 'Comportamientos',
        'relations'                       => 'Relaciones',
        'phql'                            => 'PHQL',
        'events'                          => 'Eventos',
        'validations'                     => 'Validaciones',
        'hydration'                       => 'Hydration',
        'logging'                         => 'Logging',
        'profiling'                       => 'Profiling',
        'sharding'                        => 'Sharding',
        'odm_for_mongo'                   => 'ODM para Mongo',
        'template_engine_volt'            => 'Motor de plantillas (Volt)',
        'di_ioc'                          => 'DI/IoC',
        'events_management'               => 'Events Management',
        'encryption'                      => 'Encripción',
        'http_request'                    => 'HTTP Request',
        'http_response'                   => 'Response',
        'http_cookies'                    => 'Cookies',
        'escaping'                        => 'Escapado Contextual',
        'filtering'                       => 'Filtrado',
        'forms_builder'                   => 'Constructor de Formularios',
        'forms_validation'                => 'Validación',
        'flash_messages'                  => 'Flash Messages',
        'cache'                           => 'Cache',
        'pagination'                      => 'Paginación',
        'annotations'                     => 'Anotaciones',
        'security'                        => 'Seguridad',
        'translations'                    => 'Traducción',
        'assets_management'               => 'Assets Management',
        'universal_auto_loader'           => 'Universal Auto-Loader',
        'cli'                             => 'CLI',
        'phalcon_forum_upper'             => 'FORO PHALCON',
        'stack_overflow_upper'            => 'STACK OVERFLOW',
        'github_upper'                    => 'GITHUB',
        'email_us_upper'                  => 'ESCRÍBENOS',
        'services_upper'                  => 'SERVICIOS',
        'consulting_upper'                => 'CONSULTORÍA',
        'requirements_analysis'           => 'Análisis de Requerimientos',
        'implementation'                  => 'Implementación',
        'ongoing_support'                 => 'Soporte',
        'read_more'                       => 'Leer más',
        'hosting_upper'                   => 'HOSTING',
        'phalcon_can_be_installed'        => 'Phalcon puede ser instalado en',
        'main_upper'                      => 'PRINCIPAL',
        'consulting'                      => 'Consultoria',
        'hosting'                         => 'Hosting',
        'support_upper'                   => 'SOPORTE',
        'forum_community'                 => 'Foro / Comunidad',
        'stack_overflow'                  => 'Stack Overflow',
        'issue_tracker'                   => 'Issue Tracker',
        'get_involved_upper'              => 'UNÉTE',
        'team'                            => 'Equipo',
        'about'                           => 'Sobre',
        'roadmap'                         => 'Roadmap',
        'donate_to_phalcon'               => 'Donar a Phalcon:',
        'or'                              => 'o',
        'twitter'                         => 'Twitter',
        'facebook'                        => 'Facebook',
        'google_plus'                     => 'Google Plus',
        'vimeo'                           => 'Vimeo',
        'amazing_contributors'            => 'Nuestros asombrosos colaboradores',

        'download_phalcon'                => 'Descargar Phalcon',
        'download_linux'                  => 'Linux/Unix/Mac',
        'download_windows'                => 'Windows DLLs',
        'download_developer_tools'        => 'Herramientas de Desarrollo',
        'download_ide_stubs'              => 'IDE stubs',
        'download_note'                   => 'Phalcon es una extensión en C, así que necesitarás descargar un binario para tu plataforma o compilarlo desde el código fuente',
        'download_compilation'            => 'Compilación',
        'download_compilation_1'          => 'En Linux puedes facilmente compilar e instalar la extensión desde su código fuente.',
        'download_requirements'           => 'Requerimentos',
        'download_requirements_1'         => 'Necesitamos algunos paquetes previamente instalados:',
        'download_requirements_2'         => 'Recursos de desarrollo para PHP 5.x',
        'download_requirements_3'         => 'Compilador GCC',
        'download_compilation_11'         => '1. Para crear la extensión desde el código en C sigue estos pasos:',
        'download_compilation_12'         => '2. Agrega la extensión al php.ini:',
        'download_compilation_13'         => '3. Finalmente, reinicia el servidor web',
        'download_debian'                 => 'Debian',
        'download_debian_1'               => "Existe un repositorio amablemente ofrecido por <a href=':1:'>FortRabbit</a> <a href=':2:'>aquí</a>",
        'download_debian_2'               => 'El nombre del paquete es php5-phalcon',
        'download_arch'                   => 'Arch Linux',
        'download_arch_1'                 => "Hay un PKGBUILD para ArchLinux, disponible <a href=':1:'>aquí</a>",
        'download_opensuse'               => 'OpenSUSE',
        'download_opensuse_1'             => "Hay un paquete disponible aquí <a href=':1:'>here</a> (gracias a <a href=':2:'>Mariusz Łączak</a>)",
        'download_freebsd'                => 'FreeBSD',
        'download_freebsd_1'              => 'Un port está disponible para FreeBSD. Solo necesitas estos comandos para instalarlo:',
        'download_dependencies'           => 'Dependencias',
        'download_dependencies_1'         => 'Aunque Phalcon no tiene dependencias binarias con otras extensiones, estas son opcionalmente usadas para ofrecer mayor rendimiento. Las extensiones usadas son:',
        'download_dependencies_2'         => 'No es necesario que todas las anteriores extensiones estén instaladas en el sistema donde se use Phalcon. Puedes cargar solamente las que necesites. Por ejemplo si usas MySQL, entonces solo necesitas cargar PDO y PDO/MySQL ignorando la de Oracle, SQlite, Postgresql y Mongo.',
        'download_need_help'              => 'Necesitas Ayuda?',
        'download_need_help_1'            => "Echa un vistazo a la <a href=':1:'>página de soporte</a>. Harémos lo mejor por ayudarte.",

        'download_windows_note'           => 'Recomendamos altamente usar la última versión de PHP correspondiente a nuestros DLLs, y así sacar ventaja a todas las características de Phalcon',
        'download_windows_stable'         => 'Versión Estable',
        'download_windows_installation'   => 'Instalación',
        'download_windows_installation_1' => "Para usar Phalcon en windows debes descargar una DLL. Edita tu php.ini, agrega al final extension=php_phalcon.dll, y reinicia el servidor web para cargar la extensión <a href=':1:'>More</a>.",
        'download_windows_guides'         => 'Guías Relacionadas',
        'download_windows_guides_xampp'   => 'Instalación en XAMPP',
        'download_windows_guides_wamp'    => 'Instalación en WAMP',
        'download_windows_alpha'          => 'Versiones Alpha/Beta',
        'download_source_code'            => "Código fuente: <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_source_code_switch'     => "Código fuente (por favor checa el branch correspondiente): <a href=':1:' target='_download' title='GitHub Repo'>github</a>",
        'download_no_alpha_beta'          => 'No hay versiones alpha/beta disponibles en este momento.',
        'download_windows_older'          => 'Versiones anteriores',

        'download_devtools_1'             => 'Estas herramientas son un conjunto de scripts útiles para generar código base. Componentes base de tu aplicación pueden ser generados con un simple comando, permitiendo facilmente desarrollar aplicaciones usando Phalcon.
',
        'download_devtools_docs'          => "Documentación: <a href=':1:'>Phalcon Developer Tools</a>",
        'download_devtools_composer'      => 'Instalar via Composer',
        'download_devtools_composer_1'    => 'Instalar composer en una ubicación conocida o dentro de tu proyecto:',
        'download_devtools_composer_2'    => 'Crea el archivo composer.json como a continuación:',
        'download_devtools_composer_3'    => 'Correr el instalador composer:',
        'download_devtools_composer_4'    => 'Script para crear un enlace simbólico a phalcon.php:',
        'download_devtools_download'      => 'Puedes descargar o clonar un paquete multi-plataforma que contiene developer tools desde <a href=":1:">Github</a>.',

        'download_vagrant'                => 'Vagrant',
        'download_vagrant_boxes'          => 'Máquinas virtuales Vagrant',
        'download_vagrant_1'              => "<a href=':1:'>Vagrant</a> es una excelente herramienta para crear y configurar entornos de desarrollo livianos, reproducibles, y portables.",
        'download_vagrant_2'              => "Use cualquiera de las siguientes máquinas virtuales para probar o desarrollar con Phalcon en un entorno pre-configurado.",
        'download_box_1'                  => "Máquina virtual #1",
        'download_box_2'                  => "Máquina virtual #2",
        'download_box_user_pass'          => "MySQL Usuario: :1: Contraseña: :2:",
        'download_box_doc_root'           => "Raíz de la aplicación: :1:",
        'download_examples'               => "Ejemplos pre-instalados",
        'download_examples_1'             => "Los siguientes ejemplos están pre-instalados en cada máquina virtual Vagrant:",

        'consulting_header'               => "Estamos ofreciendo servicios de consultoria para Phalcon <br />y/o implementaciones PHP",
        'requirements_analysis_1'         => 'Uno de los mayores problemas que los desarrolladores encuentran es el hecho que muchos proyectos no han definido adecuadamente sus requerimientos. Entonces, más que seguido encontramos que lo que los clientes desean es totalmente diferente a lo que el desarrollador entendió debía implementar.',
        'requirements_analysis_2'         => 'Podemos ofrecer servicios en análisis de requerimientos, discutir con los clientes y traducir su visión exacta en especificaciones para desarrolladores.',
        'implementation_1'                => 'Si deseas contratarnos para desarrollar tu aplicación, estaríamos más que felices en hacerlo. Usando las últimas tecnologias, podemos ofrecer una solución robusta para tu proyecto, junto con tests de unidad y documentación.',
        'ongoing_support_1'               => 'Para desarrolladores que estén interesados en un contrato de soporte podemos ofrecerlo para sus proyectos. Desarrolladores pueden comprar horas de soporte (mínimo 2 horas) a 50 USD por hora.',
        'ongoing_support_2'               => 'Las horas de soporte no expiran y pueden ser usadas cuando se requiera. Para desarrolladores que deseen otra estrategia de soporte, podemos ofrecer planes más flexibles que suplan sus necesidades.',
        'sponsors'                        => 'Patrocinadores',
        'sponsors_1'                      => 'Para aquellos que deseen patrocinar nuestro trabajo y el desarrollo futuro de Phalcon, ofrecemos varias opciones de patrocinio.',
        'sponsors_2'                      => 'Adicionalmente, los clientes podrían querer características específicas implementadas que normalmente puedan tomar más tiempo en hacerse debido a su poca popularidad o complejidad. Podemos acomodar estas peticiones a tarifas normales.',
        'contact'                         => 'Contacto',
        'contact_1'                       => "Ten la libertad de <a href=':1:'>contactarnos</a> para discutir tus requerimientos y ofrecer una solución que pueda satisfacer tu presupuesto. No hay proyecto muy grande o muy pequeño.",

        'phalcon_team'                    => 'Equipo Phalcon',
        'team_andres_1'                   => 'Andrés no es ajeno a los proyectos de software abierto, en los últimos nueve años, ha estado diseñando y liberando frameworks y librerías para PHP además de estar envuelto activamente en desarrollo web - su mayor pasión.',
        'team_andres_2'                   => "Como ganador del premio TR35, su mayor guía es escoger y usar la herramienta correcta para cada tarea, casi siempre enfocándose en rendimiento e innovación. En 2011 una nueva idea empezó a concebirse, crear un nuevo tipo de framework para desarrolladores PHP que se enfoque en usabilidad, características y principalmente rendimiento.",
        'team_andres_3'                   => 'A través de esta nueva iniciativa Phalcon ha nacido. Un framework escrito en C que pueda ofrecer un gran número de características a desarrolladores mientras maximiza el rendimiento y mantiene el consumo de recursos bajo.',
        'team_andres_4'                   => 'Andrés es uno de los desarrolladores y creadores de Phalcon y su inspiración.',
        'team_nikos_1'                    => 'Nikos ha estado en la industria de IT por al menos 20 años. Inició en el mundo de PHP en el 2000 y ha estado en él trabajando en sus proyectos personales y los de sus empleadores.',
        'team_nikos_2'                    => 'Le encanta descubrir nuevas tecnologías y buscar formas de integrarlos con aplicaciones existentes sacando proyecho de ellas.',
        'team_nikos_3'                    => 'Él es un entusiasta del Desarrollo Orientado a Pruebas (TDD) y siempre trata de conseguir total cobertura en su código.',
        'team_nikos_4'                    => "El continuo interés de Nikos en nuevas e innovadoras de tecnologias que salgan del molde lo introdujo a Phalcon. Se unió al core team y sus principales tareas están relacionadas con NFRs y corrección de bugs, ayudando con tests, documentación y la incubadora. Nikos es responsable de mantener las DLLs de Windows y ofrecer soporte siempre que sea posible.",
        'team_nikolay_1'                  => 'Nikolay has been developing web applications for over 10 years. He has been involved in high performance as well as complex websites and designs.',
        'team_nikolay_2'                  => 'Nikolay ha trabajado en proyectos de software abierto por largo tiempo, utilizándolos según los requerimientos lo permitan. Él empezó usando su tiempo personal para darle soporte a la comunidad, ofreciendo cambios en la arquitectura y sugerencias en rendimiento. También ha dedicado tiempo a la creación y mejora de CMSs de código abierto recibiendo criticas positivas de la comunidad.',
        'team_nikolay_3'                  => 'Su participación continua en proyectos de código abierto le ha ayudado a avanzar en sus conocimientos técnicos al mismo tiempo manteniendo la mentalidad de devolver a la comunidad.',
        'team_nikolay_4'                  => 'Nikolay es un impulsor de alcanzar el máximo rendimiento en aplicaciones web. Después de conocer Phalcon, decidió convertirse en un evangelista de él. Está liderando los esfuerzos en la comunidad de rusa ofreciendo recursos y ayuda a los ruso-hablantes.',
        'team_nikolay_5'                  => "Sus contribuciones incluyen: un espejo al sitio principal en Ruso (<a href=':1:'>http://www.phalconphp.ru</a>), un espejo de la documentación en este idioma (<a href=':2:'>http://docs.phalconphp.ru</a>), cambios frecuentes y mejoras a la documentación en inglés, un grupo en la red social Vkontakte (<a href=':3:'>http://vk.com/phalconphp</a>).",

        'get_involved'                    => 'Únete',
        'about_description_1'             => "Proyectos increíbles necesitan manos increíbles, tal vez no nos conozcamos aún pero pensamos que puedes ser una gran ayuda para construir una mejor web. Juntos, estamos listos para cambiar el mundo!, Con Phalcon, estamos creando una nueva generación de frameworks para PHP, queremos darte un increíble rendimiento mientras te ayudamos a desarrollar de manera sencilla y divertida.",
        'about_description_2'             => 'Esperamos que disfrutes Phalcon tanto como nosotros. Nuestros brazos están siempre abiertos para recibir tu colaboración en las muchas cosas que un proyecto como este requiere:',
        'about_translations_1'            => "Estamos tratando de llegar a tantos desarrolladores como sea posible, rompiendo las barreras del idioma. Estamos usando <a href=':1:'>:2:</a>, para administrar todas las palabras o frases que deben ser traducidas en este sitio. El repositorio del proyecto está ubicado <a href=':3:'>aqui</a> y a continuación puedes ver el estado actual de los esfuerzos de traducción:",
        'documentation_upper'             => 'DOCUMENTACIÓN',
        'about_documentation_1'           => 'El repositorio de este sitio web está disponible en Github. Ten la libertad de mejorar la redacción, corregir errores, agregar ejemplos, tutoriales, etc. También, si deseas traducir su contenido a otro idioma, lo apreciaremos mucho!',
        'screencasts'                     => 'Screencasts',
        'about_screencasts_1'             => "Nos encantan los screencasts, si tienes tiempo extra y quieres apoyar la comunidad con algunos buenos videos explicando como el framework funciona y alguna de sus características, serán muy bienvenidos. Checa nuestra canal en <a href=':1:'>Vimeo</a> como guía.",
        'tests'                           => 'Pruebas',
        'about_tests_1'                   => "No hay software que esté libre de bugs. Si encuentras uno, por favor no dudes en contarnos. Nuestra suite de test unitarios contiene más de <a href=':1:'>8000</a> tests. Sin embargo, los test unitarios nunca sobran. Ayudanos a mejorar la suite de tests agregando más o mejorando los existentes. Cada test hace que el framework sea más estable.",
        'sample_applications'             => 'Aplicaciones de Ejemplo',
        'about_sample_apps_1'             => 'Ejemplos completos ayudan a otros a entender como cosas grandes pueden hacerse en Phalcon. Siéntete libre de compartir repositorios con aplicaciones de ejemplo que ayuden a otros a empezar con Phalcon adicionalmente dándote la oportunidad de recibir comentarios sobre tu trabajo también!',
        'evangelism'                      => 'Evangelización',
        'about_evangelism_1'              => "Hay muchas desarrolladores que aún no saben que Phalcon existe o realmente funciona. Estamos seguros que muchos desarrolladores se beneficiarán al conocer sobre Phalcon y todo lo que ofrece. Si sabes de algún evento ó reunión de PHP donde puedas darlo a conocer, tienes todo nuestro apoyo. ¿Quién no quiere saber sobre la herramienta que cambiará la forma de ver el desarrollo en PHP?",
        'share_your_experiences'          => 'Comparte tus experiencias',
        'about_share_experiences_1'       => "No seas timido, comparte sus experiencias y las formas en las Phalcon fue útil con la comunidad. Si Phalcon es un caso de éxito para ti, permítenos compartirlo con la comunidad. Discutir sobre los componentes que necesitan más trabajo, que podría ser más fácil y los beneficios que obtuviste al usar Phalcon. A pesar que no todo puede ser implementado de manera inmediata, tus comentarios en nuevas características nos ayuda a moldear de mejor manera el proyecto. Tus comentarios ayudan a todos.",
        'about_blog_1'                    => "Si te gusta escribir, recuerda que <a href=':1:'>nuestro blog</a> está abierto a tutoriales creados por ti. Si tienes un blog y has escrito algo sobre Phalcon, podemos publicarlo en nuestra redes sociales dandole mayor visibilidad. Si tus posts está en un idioma diferente a inglés, nos gustaría compartirlo y potencialmente intentar traducirlo. Si conoces blogs de PHP que esten interesados en presentar Phalcon a sus audiencias por favor háznoslo saber.",
        'donations_sponsoring'            => 'Donar / Patrocinar',
        'about_sponsoring_1'              => "Son un equipo pequeño pero efectivo de desarrolladores trabajando muchísimo. Intentamos dedicar todo el tiempo posible al proyecto. Nuestra pasión por este proyecto nos hace querer que sea mejor cada día. Phalcon es un proyecto de software abierto y esfuerzos voluntarios son necesarios para su constante evolución. Puedes ayudarnos a mantener el desarrollo activo donando o patrocinando su desarrollo. Más tiempo y recursos dedicados significan mayor actividad, mejora, mejor soporte, más características, etc.",
        'social_networks'                 => 'Redes Sociales',
        'about_social_networks_1'         => "Phalcon está evolucionando cada día, a través del deseo de hacerlo mejor. Las redes sociales son parte de nuestras vidas, interactuamos con otros a través de ellas. Compartir tu experiencia con tus círculos sociales nos ayuda a aumentar la visibilidad del proyecto. Más y más gente se unirá a nuestra comunidad, haciéndola más poderosa. Dando \"me gusta\" o \"+1\", compartiendo los posts, permite que otros conozcan lo que estamos haciendo. Las personas que conozcan Phalcon gracias a ti te lo agradecerán!.",
        'about_social_networks_2'         => "Tenemos presencia en la mayor parte de redes sociales, al seguirnos, nos ayudas a tener mayor visibilidad.",
        'follow_on_twitter'               => 'Síguenos en Twitter',
        'facebook_page'                   => 'Página de Facebook',
        'google_plus_page'                => 'Página en Google+',
        'official_blog'                   => 'Blog Oficial',
        'star_on_github'                  => 'Agrega el proyecto a tus favoritos en Github',
        'thank_you'                       => 'Gracias!',
        'about_thank_you_1'               => 'Queremos dar gracias a todos los colaboradores y miembros de la comunidad por darlos su confianza para crear el mejor framework de su clase. Tus amables palabras y confianza es lo que nos motiva a ser mejores. Esperamos llenar las expectativas que pones en Phalcon.',
        'flying_with_phalcon'             => 'Gracias por volar con Phalcon! &lt;3',

        'hosting_description'             => 'Phalcon puede ser instalado en cualquier maquina donde el proveedor de hosting ofrezca accesso SSH con root (o sudo). A continuación una lista de compañias que ofrecen estos servicios.',
        'hosting_fortrabbit_title'        => 'Fortrabbit',
        'hosting_fortrabbit_1'            => 'Fortrabbit ofrece varios planes (hay uno para desarrolladores que es gratis - con algunas limitantes) satisfaciendo las necesidades de la mayoría de desarrolladores que deseen usar Phalcon o desplegar sus aplicaciones allí.',
        'hosting_fortrabbit_2'            => "Ellos ofrecen la posibilidad de usar un variado conjunto de <a href=':1:'>extensions</a> que satisfacerá hasta el proyecto más exigente.",
        'hosting_fortrabbit_3'            => 'Versiones estables de Phalcon están pre-instaladas, puedes activarlas desde el dashboard de administración.',
        'hosting_webfaction_title'        => 'WebFaction',
        'hosting_webfaction_1'            => 'WebFaction Hosting para desarrolladores. Acceso completo desde consola a servidores rápidos con todas tus herramientas favoritas pre-instaladas y mantenidas por el usuario.',
        'hosting_webfaction_2'            => "Para instalar Phalcon en WebFaction, sigue las instrucciones disponibles <a href=':1:'>aquí</a>",
        'hosting_amazon_ec2_title'        => 'Amazon EC2',
        'hosting_amazon_ec2_1'            => 'Amazon Elastic Compute Cloud ofrece escalable, paga-por-lo-que-usas capacidad en la nube.',
        'hosting_amazon_ec2_2'            => "Escoge un Amazon Machine Image (AMI) pre-configurado para empezar a trabajar inmediatamente. También puedes crear un AMI que contenga tus aplicaciones, librerías, datos y configuración asociada. <a href=':1:'>Ver más</a>",
        'hosting_linode_title'            => "Linode",
        'hosting_linode_1'                => "Desplega y administra Linux Virtual Servers en la Linode Cloud. Obtén un servidor corriendo en segundos con la distribución Linux, recursos y nodo de ubicación que quieras. <a href=':1:'>Ver más</a>",
        'hosting_digital_ocean_title'     => 'Digital Ocean',
        'hosting_digital_ocean_1'         => "Tecnología en la nube súper rápida. Creada para desarrolladores. Lanza un servidor en la nube con SSD en tan solo 55 segundos. <a href=':1:'>Ver más</a>",
        'hosting_digital_ocean_2'         => "<p>Follow this <a href=':1:'>tutorial</a> to get started</p>",
        'hosting_rackspace_title'         => "Rackspace",
        'hosting_rackspace_1'             => "Cloud Servers son maquinas virtuales corriendo Linux o Windows&reg; Server en la nube Rackspace. Puedes escalar aumentando o disminuyendo recursos como CPU, memoria, y almacenamiento, dependiendo de tus necesidades. Lo mejor de todo, pagas según consumas. <a href=':1:'>Ver más</a>",
        'hosting_install_instructions'    => 'Instalar Phalcon usando las instrucciones estándar de instalación.',
        'hosting_azure_title'             => "Windows Azure",
        'hosting_azure_1'                 => "El <a href=':1:'>servicio en la nube de Windows Azure</a> le provee hosting en Windows altamente escalable y administrable para sus aplicaciones web. Use Phalcon para reducir el costo de sus instancias.",
        'hosting_azure_2'                 => "Para instalar Phalcon, siga el paso a paso en <a href=':1:'>este artículo de SitePoint</a>.",
        'hosting_aspnix_1'                => 'ASPnix provides superior Windows web hosting services. Our customers have rated our service as outstanding. We offer economical plans for shared Windows web hosting, Virtual private servers and dedicated servers!  <a href=":1:">See more</a>',
        'hosting_aspnix_2'                => '<p>Phalcon is supported on all Windows shared web hosting packages and plans, no configuration or installation required! They offer a variety of PHP versions from 5.2 – 5.6 as well as many <a href=":1:" target="_blank">additional extensions</a>!</p>',
        'hosting_layershift_title'        => 'Layershift',
        'hosting_layershift_1'            => "You bring the code, we'll sort the servers. Next generation, auto-sizing PaaS for PHP",
        'hosting_layershift_2'            => "<p>Follow this <a href=':1'>tutorial</a> to get started</p>",

        'testimonials'                    => 'Testimonios',
        'testimonials_description'        => "A continuación hay un conjunto de testimonios y casos de éxito, de personas como tú, desarrolladores y usuarios de Phalcon. Si tienes casos de éxito, no dudes en compartirlos con nosotros, escríbenos a <a href='mailto::1:'>:2:</a>.",
        'testimonials_1'                  => "Saludos, equipo Phalcon! Tengo un proyecto, construido en el framework Phalcon. Es una Guitarama (<a href=':1:'>:2:</a>) - tablaturas de guitarra y catálogo de acordes. El sitio está destinado para audiencia Rusa y usa el lenguaje Ruso, pero espero que no haya ningún problema en entender la mayoría de las páginas. El sitio fue re-lanzado en una nueva plataforma a principios de Enero de 2013, y desde entonces ha mostrado un crecimiento constante. Visitas diarias actuales: ~1500 visitantes únicos, ~5000 páginas vistas. El sitio corre sobre un viejo servidor físico 1xP4-3Ghz, 4GB RAM. De nuevo, gracias por su grandioso framework y por todo lo que hacen :) Michael.",
        'testimonials_2'                  => "Hola, equipo Phalcon. Queremos compartir nuestro caso de éxito usando Phalcon en los proyectos <a href=':1:'>:2:</a> y <a href=':3:'>:4:</a>, los sitios más visitados y con más carga de Kazakhstan, clasificados en el TOP-10 de sitios en el CIS. Ambos sitios trabajan con una API similar a RESTful escrita en Phalcon\Mvc\Micro. En cargas altas la API procesa alrededor de 400 peticiones/segundo y este no es el límite. Al cambiarnos a Phalcon hemos reducido el tiempo de procesamiento y el consumo de CPU y memoria así como el tiempo de desarrollo. Continuaremos usando Phalcon en nuevos proyectos. Gracias por el gran trabajo que están haciendo! Saludos, Nikita Vershinin, Lead Developer, Kolesa.kz y krisha.kz",
        'testimonials_3'                  => "Equipo Phalcon, el framework que han creado es increíble, nunca había usado un framework que combinara, velocidad, eficiencia, brevedad y naturalidad todo en un solo paquete. Trataré de contribuir de vuelva al proyecto en todo lo que pueda. Recientemente empecé a hacer un proyecto de unas ~800 horas y estoy feliz de decir que usaré Phalcon Framework. Bravo.",
        'testimonials_4'                  => "Hola chicos, Acabo de encontrar Phalcon y es increíble!, Solamente quiero decirles lo increíbles que son!, Gracias por el framework y sigan con el buen trabajo! Ivan Penchev",
        'testimonials_5'                  => "Hola Chicos, escribí un servicio de acortador de urls con Phalcon. ¡Fue increíble! enserio. <a href=':1:'>:2:</a>. Este es el demo <a href=':3:'>:4:</a> :) Murat Küçükosman",
        'testimonials_6'                  => "Hola equipo Phalcon, cree un pequeño proyecto diseñado para usuarios Polacos usando su framework. Tengo que admitir que el rendimiento es asombroso, felicitaciones por su buen trabajo. Sirve para valir el contenido de páginas web en el lenguaje Polaco <a href=':1:'></a>:2:</a>",
        'testimonials_7'                  => "Hola chicos! Solo quiero compartir con ustedes la última versión de nuestro viejo proyecto - <a href=':1:'>:2:</a>. Cambiarnos a Phalcon nos permitió reducir a la mitad la carga del servidor comparado con anteriores frameworks, ¡lo cual es grandioso!",

        'support_note'                    => "Algunos errores pueden aparecer debido a que no estas usando la última versión. Por favor visita :1:, descarga la última versión (o compilala) y confirma que el problema que estás experimentando es en realidad un error.",
        'support_download_page'           => "página de descargas",
        'support_documentation_1'         => "Por favor usa la :1: antes que todo. Puedes también usar la opción de buscar documentos para encontrar lo que estás buscando. Si tu pregunta sigue sin respuesta hay más opciones a continuación.",
        'support_phalcon_forum'           => "Foro Phalcon",
        'support_forum_1'                 => "Puedes preguntar en nuestro <a href=':1:'>Foro de discusión</a>",
        'support_irc'                     => "Canal IRC",
        'support_irc_1'                   => "Puedes encontrarnos en el canal :1: de Freenode.",
        'support_stack_overflow_1'        => "Si estás familiarizado o prefieres Stack Overflow, hay una etiqueta <a href=':1:'>phalcon</a> que puedes usar para consultar otras preguntas o etiquetar tu pregunta.",
        'support_please_note'             => "Ten en cuenta:",
        'support_please_note_1'           => "Stack Overflow no está dedicado a soportar Phalcon",
        'support_please_note_2'           => "Por favor no informes sobre bugs allí. Usa el <a href=':1:'>issue tracker</a> en Github para ello",
        'support_please_note_3'           => "Por favor no solicites nuevas características allí. Usa el <a href=':1:'>issue tracker</a> en Github para ello",
        'support_please_note_4'           => "Recuerda incluir la etiqueta 'phalcon' en tu pregunta",
        'support_please_note_5'           => "Recuerda mencionar 'Phalcon' en la pregunta",
        'support_reporting_a_bug'         => "Reportar un bug",
        'support_reporting_a_bug_1'       => "Por favor reporta bugs cuando hayas agotado todas las opciones anteriores, usando el <a href=':1:'>issue tracker</a> en Github.",


    );

    // return $messages;