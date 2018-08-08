// console.log("zdaroviuka");

var pavadinimas = "Method	Description, o tu?";
pavadinimas.toUpperCase();

var kitcPavadinims = " Sveiks, ka tu?";

// charAt()	Returns the character at the specified index (position)

console.log(pavadinimas.charAt(3));
// charCodeAt()	Returns the Unicode of the character at the specified index
console.log(pavadinimas.charCodeAt(1));
// concat()	Joins two or more strings, and returns a new joined strings
console.log(pavadinimas.concat(kitcPavadinims)); // sujungia du stringus


// endsWith()	Checks whether a string ends with specified string/characters
console.log(pavadinimas.endsWith());

// fromCharCode()	Converts Unicode values to characters


// includes()	Checks whether a string contains the specified string/characters
console.log(pavadinimas.includes("o"));



// indexOf()	Returns the position of the first found occurrence of a specified value in a string

// lastIndexOf()	Returns the position of the last found occurrence of a specified value in a string

// localeCompare()	Compares two strings in the current locale
console.log(pavadinimas.localeCompare(kitcPavadinims));

// match()	Searches a string for a match against a regular expression, and returns the matches
console.log(pavadinimas.match(pavadinimas, pavadinimas));
// repeat()	Returns a new string with a specified number of copies of an existing string
console.log(pavadinimas.repeat(3));


// replace()	Searches a string for a specified value, or a regular expression, and returns a new string where the specified values are replaced
// search()	Searches a string for a specified value, or regular expression, and returns the position of the match

console.log(pavadinimas.search(5));

// slice()	Extracts a part of a string and returns a new string
// split()	Splits a string into an array of substrings
console.log(pavadinimas.split("tu"));

// startsWith()	Checks whether a string begins with specified characters

// substr()	Extracts the characters from a string, beginning at a specified start position, and through the specified number of character
// substring()	Extracts the characters from a string, between two specified indices
// toLocaleLowerCase()	Converts a string to lowercase letters, according to the host's locale
// toLocaleUpperCase()	Converts a string to uppercase letters, according to the host's locale
// toLowerCase()	Converts a string to lowercase letters
// toString()	Returns the value of a String object
// toUpperCase()	Converts a string to uppercase letters
// trim()	Removes whitespace from both ends of a string
// valueOf()	Returns the primitive value of a String object

console.log(pavadinimas.valueOf());