const levenshteinDistance = (str1 = '', str2 = '') => {
    const track = Array(str2.length + 1).fill(null).map(() =>
    Array(str1.length + 1).fill(null));
    for (let i = 0; i <= str1.length; i += 1) {
       track[0][i] = i;
    }
    for (let j = 0; j <= str2.length; j += 1) {
       track[j][0] = j;
    }
    for (let j = 1; j <= str2.length; j += 1) {
       for (let i = 1; i <= str1.length; i += 1) {
          const indicator = str1[i - 1] === str2[j - 1] ? 0 : 1;
          track[j][i] = Math.min(
             track[j][i - 1] + 1, // deletion
             track[j - 1][i] + 1, // insertion
             track[j - 1][i - 1] + indicator, // substitution
          );
       }
    }
    return track[str2.length][str1.length];
 };

function scrollintoid(text)
{
    my_element = document.getElementById(text);
    my_element.scrollIntoView
    ({
    behavior: "smooth",
    block: "start",
    inline: "nearest"
    });
    console.log("here");
}

 function search()
{
    levenstainLenght=10;
    var book;
    text = document.getElementsByClassName("searchb")[0].value;
    books = document.getElementsByClassName("book");
    nofbook = document.getElementsByClassName("book").length;
    for(i = 0; i<nofbook;i++) 
    {   
        val= levenshteinDistance((books[i].textContent).replace(/\s+/g, '').toLowerCase(),text.replace(/\s+/g, '').toLowerCase());
        if(levenstainLenght>val)
        {
            levenstainLenght = val;
            book = books[i];
        }
    }

    if(levenstainLenght<4)
    {       
        scrollintoid(book.id);
        console.log(book.id);
        setTimeout(myFunction=>{book.classList.add("over");}, 1000)
        setTimeout(myFunction=>{book.classList.remove("over");}, 3000)
    }
    console.log("non va");

    function data(offset)
    {
        var d = new Date();
        d.setDate(d.getDate()-1)
        return d.getDate();
    }
}
