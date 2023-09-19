const panels = document.querySelectorAll('.panel');

function removeActiveClasses() {
    panels.forEach(panel => {
        panel.classList.remove('active')
    })
}

panels.forEach((panel) => {
    panel.addEventListener('click', () => {
        removeActiveClasses()
        panel.classList.add('active')
    })
})

var link1 = document.getElementById("link1");
var link2 = document.getElementById("link2");
var link3 = document.getElementById("link3");

var link1pic = document.getElementById("link1Image");
var link2pic = document.getElementById("link2Image");
var link3pic = document.getElementById("link3Image");

var panel1text = document.getElementById("panel1text");
var panel2text = document.getElementById("panel2text");
var panel3text = document.getElementById("panel3text");
var panel4text = document.getElementById("panel4text");


const sites = [
    "Awesome Curling Experience!",
    "Horseback Riding Tours.",
    "Scuba Diving at Ressurection Bay.",
    "Alaska Hiking Adventures.",
    "Top Kayayking and Canoeing Destinations.",
    "Whale-Watching at Newport Landing.",
    "Tundra To Table: Inuit Culinary Experience.",
    "Kincaid Grill: Alaska Regional Cuisine.",
    "Captain Pattie's Fish House.",
    "Salty Dawg Saloon.",
    "Kharacters Alaskan Bar",
    "Down East Saloon."
]

const links = [
    "https://www.viator.com/tours/Montreal/Curling-4-Ever/d625-269817P1",
    "https://www.equitours.com/#",
    "https://divealaska.net/resurrection-bay-seward-alaska/",
    "https://kenaibackcountryadventures.com/adventures/alaska-hiking",
    "https://adventures.com/blog/5-best-places-kayak-canada/",
    "https://newportwhales.com/",
    "https://www.quarkexpeditions.com/adventure-options/tundra-to-table-inuit-culinary-experience",
    "http://www.kincaidgrill.com/",
    "https://restaurantguru.com/Captain-Patties-Homer",
    "https://saltydawgsaloon.com/",
    "https://kharacters-bar.edan.io/",
    "https://www.tripadvisor.com/Restaurant_Review-g31009-d8616795-Reviews-Down_East_Saloon-Homer_Alaska.html"
]

const pics = [
    "attractionImages/curling.jpg",
    "attractionImages/horseTours.jpg",
    "attractionImages/scubaSteve.jpeg",
    "attractionImages/hiking.jpg",
    "attractionImages/kayaking.webp",
    "attractionImages/whaleWatching.jpg",
    "attractionImages/tundraToTable.jpg",
    "attractionImages/Kincaid.avif",
    "attractionImages/captainPatties.jpg",
    "attractionImages/SaltyDawgSaloon.jpg",
    "attractionImages/kharacters.jpg",
    "attractionImages/DownEast.png"
]

function setPanel1Links() {

    link1.innerHTML = sites[0];
    link1.setAttribute('href', links[0]);
    link1pic.setAttribute('src', pics[0]);

    link2.innerHTML = sites[1];
    link2.setAttribute('href', links[1]);
    link2pic.setAttribute('src', pics[1]);
    
    link3.innerHTML = sites[2];
    link3.setAttribute('href', links[2]);
    link3pic.setAttribute('src', pics[2]);
    
    panel1text.style.color = 'white';
}

function setPanel2Links() {

    link1.innerHTML = sites[3];
    link1.setAttribute('href', links[3]);
    link1pic.setAttribute('src', pics[3]);
    link2.innerHTML = sites[4];
    link2.setAttribute('href', links[4]);
    link2pic.setAttribute('src', pics[4]);
    link3.innerHTML = sites[5];
    link3.setAttribute('href', links[5]);
    link3pic.setAttribute('src', pics[5]);
    panel2text.style.color = 'white';
}

function setPanel3Links() {

    link1.innerHTML = sites[6];
    link1.setAttribute('href', links[6]);
    link1pic.setAttribute('src', pics[6]);
    link2.innerHTML = sites[7];
    link2.setAttribute('href', links[7]);
    link2pic.setAttribute('src', pics[7]);
    link3.innerHTML = sites[8];
    link3.setAttribute('href', links[8]);
    link3pic.setAttribute('src', pics[8]);
    panel3text.style.color = 'black';
}

function setPanel4Links() {

    link1.innerHTML = sites[9];
    link1.setAttribute('href', links[9]);
    link1pic.setAttribute('src', pics[9]);
    link2.innerHTML = sites[10];
    link2.setAttribute('href', links[10]);
    link2pic.setAttribute('src', pics[10]);
    link3.innerHTML = sites[11];
    link3.setAttribute('href', links[11]);
    link3pic.setAttribute('src', pics[11]);
    panel4text.style.color = 'white';
}

