cp.playbarAssetArr = 
[
	'AudioOff',
	'AudioOn',
	'BackGround',
	'Backward',
	'Color',
	'ColorSmall',
	'CC',
	'Exit',
	'FastForward',
	'FastForward1',
	'FastForward2',
	'Forward',
	'Glow',
	'GlowSmall',
	'Height',
	'Play',
	'Pause',
	'Progress',
	'Rewind',
	'Stroke',
	'StrokeSmall',
	'Thumb',
	'ThumbBase',
	'TOC'
];
cp.playbarTooltips = 
{
	AudioOff : "Audio activé ",
	AudioOn : "Audio désactivé ",
	Backward : "Retour ",
	CC : "Sous-titrage ",
	Exit : "Quitter ",
	FastForward : "Vitesse d'avance rapide x2 ",
	FastForward1 : "Vitesse d'avance rapide x4 ",
	FastForward2 : "Vitesse normale ",
	Forward : "Avancer ",
	Play : "Lire ",
	Pause : "Pause ",
	Rewind : "Rembobiner ",
	TOC : "Table des matières ",
	Info : "Informations ",
	Print : "Imprimer "
};
cp.responsiveButtons = 
{
	//"ButtonName"	: 	[Primary,Tablet,Mobile],
	"Rewind"		: 	[true,true,false],
	"Backward"		: 	[true,true,true],
	"Play"			: 	[true,true,true],
	"Slider"		: 	[true,true,false],
	"Forward"		: 	[true,true,true],
	"CC"			: 	[true,true,true],
	"AudioOn"		: 	[true,false,false],
	"Exit"			: 	[true,true,true],
	"FastForward"	: 	[true,true,false],
	"TOC"			: 	[true,true,false]
};
cp.handleSpecialForPlaybar = function(playbarConstruct)
{
}