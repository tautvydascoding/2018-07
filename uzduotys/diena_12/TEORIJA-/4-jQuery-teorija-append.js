
//=====================================
//  objekto (Node) arba teksto - idejimas i HTML
//=====================================
// append(x, [y], [z], ... ) - Inserts content at the end of the selected elements (viduje, gale)

// prepend() - Inserts content at the beginning of the selected elements (viduje, pradzioje)
// after() - Inserts content after the selected elements (isoreje, po elemento)
// before() - Inserts content before the selected elements (isoreja, pries elementa)
// insertBefore();    // The .before() and .insertBefore() methods perform the same task.
// appendTo() - i kur perkelti si elementa

var elementasH1 =   $("h1"),
    appendText  = "<b>appended text</b>",
    prependText = "<b>prepend text</b>",
    afterText   = "<b>after text</b>",
    beforeText  = "<b>before text</b>";

//elementasH1.append( appendText);
//elementasH1.prepend( prependText);
//elementasH1.after( afterText);
//elementasH1.before( beforeText);
//elementasH1.appendTo( "html");  // h1 perkels i html pabaiga

// ========tricks=====================
// perkels (nekopijuos)  elementa i kita  vieta
$( "body" ).append( $( "h1" ) );

// Important: If there is more than one target element, however, cloned copies of the inserted element will be created for each target except for the last one.
