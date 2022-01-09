function scrollintoid(text)
{
    var my_element = document.getElementById(text);
    my_element.scrollIntoView
    ({
    behavior: "smooth",
    block: "start",
    inline: "nearest"
    });
}