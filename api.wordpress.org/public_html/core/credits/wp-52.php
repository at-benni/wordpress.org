<?php

class WP_52_Credits extends WP_Credits {

	public function groups() {
		$groups = [
			'core-developers'         => [
				'name'    => 'Noteworthy Contributors',
				'type'    => 'titles',
				'shuffle' => false,
				'data'    => [
					'matt'           => [ 'Matt Mullenweg', 'Release Lead' ],
					'chanthaboune'   => [ 'Josepha Haden', 'Release Lead' ],
					'pento'          => [ 'Gary Pendergast', 'Release Lead' ],
					'dd32'           => [ 'Dion Hulse', 'Lead Developer' ],
					'desrosj'        => [ 'Jonathan Desrosiers', 'Core Developer' ],
					'audrasjb'       => [ 'Jean-Baptiste Audras', 'Core Developer' ],
					'SergeyBiryukov' => [ 'Sergey Biryukov', 'Core Developer' ],
					'youknowriad'    => [ 'Riad Benguella', 'Core Developer' ],
					'flixos90'       => [ 'Felix Arntz', 'Core Developer' ],
					'Clorith'        => 'Marius Jensen',
					'hedgefield'     => 'Tim Hedgefield',
					'mapk'           => 'Mark Uraine',
					'JeffPaul'       => 'Jeff Paul',
					'earnjam'        => 'William Earnhardt',
					'Viper007Bond'   => 'Alex Mills',
				],
			],
			'contributing-developers' => [
				'name'    => false,
				'type'    => 'titles',
				'shuffle' => true,
				'data'    => [
					'afercia'           => 'Andrea Fercia',
					'garrett-eclipse'   => 'Garrett Hyder',
					'mukesh27'          => 'Mukesh Panchal',
					'azaozz'            => 'Andrew Ozz',
					'birgire'           => 'Birgir Erlendsson',
					'ianbelanger'       => 'Ian Belanger',
					'xkon'              => 'Konstantinos Xenos',
					'spacedmonkey'      => 'Jonny Harris',
					'johnbillion'       => 'John Blackbourn',
					'TimothyBlynJacobs' => 'Timothy Jacobs',
					'ocean90'           => 'Dominik Schilling',
					'afragen'           => 'Andy Fragen',
					'melchoyce'         => 'Mel Choyce',
					'pbiron'            => 'Paul Biron',
					'jorbin'            => 'Aaron Jorbin',
					'ramiy'             => 'Rami Yushuvaev',
					'adamsilverstein'   => 'Adam Silverstein',
					'man4toman'         => 'Morteza Geransayeh',
					'swissspidy'        => 'Pascal Birchler',
					'chetan200891'      => 'Chetan Prajapati',
					'aduth'             => 'Andrew Duthie',
					'kraftbj'           => 'Brandon Kraft',
					'andizer'           => 'Andy Meerwaldt',
					'karmatosed'        => 'Tammie Lister',
					'david.binda'       => 'David Binovec',
					'tellyworth'        => 'Alex Shiels',
					'dswebsme'          => 'D.S. Webster',
					'dimadin'           => 'Milan Dinić',
					'subrataemfluence'  => 'Subrata Sarkar',
					'davidbaumwald'     => 'David Baumwald',
					'nerrad'            => 'Darren Ethier',
					'Joen'              => 'Joen Asmussen',
					'kjellr'            => 'Kjell Reigstad',
					'jeremyfelt'        => 'Jeremy Felt',
					'welcher'           => 'Ryan Welcher',
					'mikeschroder'      => 'Mike Schroder',
					'obenland'          => 'Konstantin Obenland',
					'jorgefilipecosta'  => 'Jorge Costa',
					'nosolosw'          => 'Andrés Maneiro',
					'iseulde'           => 'Ella Van Durpe',
					'gziolo'            => 'Grzegorz Ziółkowski',
					'mkaz'              => 'Marcus Kazmierczak',
					'etoledom'          => 'Eduardo Toledo',
					'Soean'             => 'Soren Wrede',
					'talldanwp'         => 'Daniel Richards',
				],
			],
		];

		return $groups;
	}

	public function props() {
		return [
			'0mirka00',
			'aandrewdixon',
			'aaroncampbell',
			'adamsilverstein',
			'adamsoucie',
			'aduth',
			'afercia',
			'afragen',
			'akirk',
			'ajitbohra',
			'aldavigdis',
			'alexdenning',
			'alexislloyd',
			'allancole',
			'allendav',
			'andizer',
			'andraganescu',
			'andreamiddleton',
			'aniketpatel',
			'antonypuckey',
			'arena',
			'aristath',
			'atimmer',
			'audrasjb',
			'avillegasn',
			'axaak',
			'azaozz',
			'bahia0019',
			'bamadesigner',
			'bfintal',
			'billerickson',
			'birgire',
			'bodohugobarwich',
			'boonebgorges',
			'bradleyt',
			'brentswisher',
			'britner',
			'builtbynorthby',
			'bulletdigital',
			'burhandodhy',
			'cathibosco1',
			'cc0a',
			'celloexpressions',
			'chanthaboune',
			'cheffheid',
			'chetan200891',
			'chiaralovelaces',
			'chouby',
			'chrisvanpatten',
			'clorith',
			'codemascot',
			'coffee2code',
			'colorful-tones',
			'danielbachhuber',
			'danieltj',
			'davefx',
			'davetgreen',
			'davidbaumwald',
			'davidbinda',
			'dd32',
			'dekervit',
			'dency',
			'denis-de-bernardy',
			'designsimply',
			'desrosj',
			'dgroddick',
			'dhanukanuwan',
			'dharm1025',
			'dianeco',
			'diddledan',
			'diegoreymendez',
			'dilipbheda',
			'dimadin',
			'dlh',
			'dmsnell',
			'drewapicture',
			'drw158',
			'dsifford',
			'dswebsme',
			'earnjam',
			'ebrahimzadeh',
			'elhardoum',
			'empireoflight',
			'endocreative',
			'etoledom',
			'euthelup',
			'fabiankaegy',
			'faisal03',
			'fierevere',
			'flixos90',
			'folletto',
			'fuegas',
			'garrett-eclipse',
			'garyj',
			'get_dave',
			'girishpanchal',
			'gitlost',
			'greatislander',
			'gutendev',
			'gziolo',
			'hannahmalcolm',
			'hardik-amipara',
			'hedgefield',
			'henrywright',
			'henrywright-1',
			'iamdmitrymayorov',
			'ianbelanger',
			'iandunn',
			'ice9js',
			'imath',
			'immeet94',
			'iseulde',
			'itowhid06',
			'itzmekhokan',
			'iworks',
			'ixium',
			'ixkaito',
			'j-falk',
			'jainnidhi',
			'jakeparis',
			'janak007',
			'jarred-kennedy',
			'jaydeep-rami',
			'jaymanpandya',
			'jayupadhyay01',
			'jcastaneda',
			'jdeeburke',
			'jdgrimes',
			'jeffpaul',
			'jeherve',
			'jeremyfelt',
			'jitendrabanjara1991',
			'joedolson',
			'joemcgill',
			'joen',
			'johannadevos',
			'johnbillion',
			'johnjamesjacoby',
			'jonathandejong',
			'joneiseman',
			'jonnybojangles',
			'joostdevalk',
			'jorbin',
			'jordesign',
			'jorgefilipecosta',
			'josephwa',
			'joshuawold',
			'joyously',
			'jplojohn',
			'jrf',
			'jrtashjian',
			'juiiee8487',
			'juliarrr',
			'kadamwhite',
			'kamataryo',
			'karinedo',
			'karmatosed',
			'katyatina',
			'kelin1003',
			'keraweb',
			'killua99',
			'kjellr',
			'koke',
			'knutsp',
			'kraftbj',
			'laurelfulford',
			'lexiqueen',
			'lgedeon',
			'liljimmi',
			'lkraav',
			'lord_viper',
			'luehrsen',
			'lukecarbis',
			'lukepettway',
			'm-e-h',
			'm_uysl',
			'maedahbatool',
			'malae',
			'man4toman',
			'manzoorwanijk',
			'mapk',
			'marco-peralta',
			'marcofernandes',
			'marekhrabe',
			'markcallen',
			'marybaum',
			'matt',
			'mattnyeus',
			'mauteri',
			'mbelchev',
			'mcsf',
			'mdwolinski',
			'mechter',
			'melchoyce',
			'mheikkila',
			'michelleweber',
			'mikengarrett',
			'mikeschinkel',
			'mikeschroder',
			'mikeselander',
			'miss_jwo',
			'miyauchi',
			'mkaz',
			'mmtr86',
			'mmuhsin',
			'modernnerd',
			'mohadeseghasemi',
			'mor10',
			'mte90',
			'mukesh27',
			'mzorz',
			'nacin',
			'naoki0h',
			'nateallen',
			'ndiego',
			'neobabis',
			'nerrad',
			'netweb',
			'nfmohit',
			'nielsdeblaauw',
			'nielslange',
			'ninio',
			'nnikolov',
			'noisysocks',
			'nosolosw',
			'notnownikki',
			'ocean90',
			'odminstudios',
			'ohiosierra',
			'olein',
			'oztaser',
			'pandelisz',
			'paragoninitiativeenterprises',
			'parsmizban',
			'pbearne',
			'pbiron',
			'pcfreak30',
			'peaceablewhale',
			'pedromendonca',
			'pento',
			'peterbooker',
			'peterwilsoncc',
			'pfiled',
			'pilou69',
			'pixolin',
			'pranalipatel',
			'pratikkry',
			'pratikthink',
			'presskopp',
			'psealock',
			'punit5658',
			'rabmalin',
			'rahmon',
			'ramiy',
			'ramizmanked',
			'ramonopoly',
			'rarst',
			'rinatkhaziev',
			'robobot3000',
			'rsusanto',
			'ryan',
			'ryanshoover',
			'ryelle',
			'saeedfard',
			'saimonh',
			'salcode',
			'samanehmirrajabi',
			'samikeijonen',
			'saracope',
			'saracup',
			'schlessera',
			'sebastianpisula',
			'seedsca',
			'sergeybiryukov',
			'sergioestevao',
			'sgarza',
			'sgastard',
			'sharifkiberu',
			'shazdeh',
			'shital-patel',
			'simison',
			'sky_76',
			'soean',
			'soulseekah',
			'spacedmonkey',
			'stevenkword',
			'subrataemfluence',
			'sudar',
			'sudhiryadav',
			'superpoincare',
			'swissspidy',
			'szepeviktor',
			'talldanwp',
			'tellyworth',
			'tfrommen',
			'thakkarhardik',
			'themonic',
			'thomstark',
			'thrijith',
			'timothyblynjacobs',
			'timph',
			'timwright12',
			'tinkerbelly',
			'tmatsuur',
			'tmdesigned',
			'tobifjellner',
			'tomharrigan',
			'toro_unit',
			'torres126',
			'travel_girl',
			'tz-media',
			'umang7',
			'vaishalipanchal',
			'valendesigns',
			'vanyukov',
			'vengisss',
			'viper007bond',
			'webfactory',
			'welcher',
			'westonruter',
			'wido',
			'williampatton',
			'willscrlt',
			'wolly',
			'wpboss',
			'wpscholar',
			'wrwrwr0',
			'xkon',
			'yoavf',
			'youknowriad',
			'zebulan',
			'zinigor',
			'zodiac1978',
		];
	}

	public function external_libraries() {
		return [
			[ 'Babel Polyfill', 'https://babeljs.io/docs/en/babel-polyfill' ],
			[ 'Backbone.js', 'http://backbonejs.org/' ],
			[ 'Class POP3', 'https://squirrelmail.org/' ],
			[ 'clipboard.js', 'https://clipboardjs.com/' ],
			[ 'Closest', 'https://github.com/jonathantneal/closest' ],
			[ 'CodeMirror', 'https://codemirror.net/' ],
			[ 'Color Animations', 'https://plugins.jquery.com/color/' ],
			[ 'getID3()', 'http://getid3.sourceforge.net/' ],
			[ 'FormData', 'https://github.com/jimmywarting/FormData' ],
			[ 'Horde Text Diff', 'https://pear.horde.org/' ],
			[ 'hoverIntent', 'http://cherne.net/brian/resources/jquery.hoverIntent.html' ],
			[ 'imgAreaSelect', 'http://odyniec.net/projects/imgareaselect/' ],
			[ 'Iris', 'https://github.com/Automattic/Iris' ],
			[ 'jQuery', 'https://jquery.com/' ],
			[ 'jQuery UI', 'https://jqueryui.com/' ],
			[ 'jQuery Hotkeys', 'https://github.com/tzuryby/jquery.hotkeys' ],
			[ 'jQuery serializeObject', 'http://benalman.com/projects/jquery-misc-plugins/' ],
			[ 'jQuery.query', 'https://plugins.jquery.com/query-object/' ],
			[ 'jQuery.suggest', 'https://github.com/pvulgaris/jquery.suggest' ],
			[ 'jQuery UI Touch Punch', 'http://touchpunch.furf.com/' ],
			[ 'json2', 'https://github.com/douglascrockford/JSON-js' ],
			[ 'Lodash', 'https://lodash.com/' ],
			[ 'Masonry', 'http://masonry.desandro.com/' ],
			[ 'MediaElement.js', 'http://mediaelementjs.com/' ],
			[ 'Moment', 'http://momentjs.com/' ],
			[ 'PclZip', 'http://www.phpconcept.net/pclzip/' ],
			[ 'PemFTP', 'https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html' ],
			[ 'phpass', 'http://www.openwall.com/phpass/' ],
			[ 'PHPMailer', 'https://github.com/PHPMailer/PHPMailer' ],
			[ 'Plupload', 'http://www.plupload.com/' ],
			[ 'random_compat', 'https://github.com/paragonie/random_compat' ],
			[ 'React', 'https://reactjs.org/' ],
			[ 'Redux', 'https://redux.js.org/' ],
			[ 'Requests', 'http://requests.ryanmccue.info/' ],
			[ 'SimplePie', 'http://simplepie.org/' ],
			[ 'The Incutio XML-RPC Library', 'http://scripts.incutio.com/xmlrpc/' ],
			[ 'Thickbox', 'http://codylindley.com/thickbox/' ],
			[ 'TinyMCE', 'https://www.tinymce.com/' ],
			[ 'Twemoji', 'https://github.com/twitter/twemoji' ],
			[ 'Underscore.js', 'http://underscorejs.org/' ],
			[ 'whatwg-fetch', 'https://github.com/github/fetch' ],
			[ 'zxcvbn', 'https://github.com/dropbox/zxcvbn' ],
		];
	}
}

