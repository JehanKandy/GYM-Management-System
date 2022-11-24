@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Fjalla+One&family=Kdam+Thmor+Pro&family=Roboto+Flex:opsz@8..144&family=Rubik&family=Teko:wght@300&display=swap+Sharp');

/*

use font families

font-family: 'Bebas Neue', cursive;
font-family: 'Fjalla One', sans-serif;
font-family: 'Kdam Thmor Pro', sans-serif;
font-family: 'Roboto Flex', sans-serif;
font-family: 'Rubik', sans-serif;
font-family: 'Teko', sans-serif;
*/

.body-home {
    width: 100%;
    height: 95vh;
    background-position: center;
    background-size: cover;
    background-image: url("../images/body3.jpg");
}

.body-home .topic {
    padding-top: 230px;
    color: white;
    font-family: 'Kdam Thmor Pro', sans-serif;
    font-size: 400%;
    text-align: center;
}

.body-home .person {
    margin-top: 25px;
    color: orange;
    text-align: right;
    padding-right: 300px;
    font-size: 350%;
    font-style: italic;
}

.brands {
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: 25px;
    margin-right: 25px;
}

.brands-grid {
    display: grid;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(6, 1fr);
    grid-auto-rows: minmax(150px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c d e f";
    padding: 45 45 45 45;
    margin-top: 20px;
    margin-bottom: 20px;
}

.brands-grid .icon1,
.icon2,
.icon3,
.icon4,
.icon5,
.icon6 {
    background-position: center;
    background-size: cover;
    border-radius: 30px;
}

.brands-grid .icon1 {
    grid-area: a;
    background-image: url("../images/sup2.jfif");
}

.brands-grid .icon2 {
    grid-area: b;
    background-image: url("../images/sup5.jfif");
}

.brands-grid .icon3 {
    grid-area: c;
    background-image: url("../images/sup7.png");
}

.brands-grid .icon4 {
    grid-area: d;
    background-image: url("../images/sup6.png");
}

.brands-grid .icon5 {
    grid-area: e;
    background-image: url("../images/sup8.jfif");
}

.brands-grid .icon6 {
    grid-area: f;
    background-image: url("../images/sup3.png");
}

.home-about {
    background-color: rgba(241, 240, 240, 0.719);
    padding-top: 30px;
    padding-bottom: 30px;
    padding-left: 20px;
    padding-right: 20px;
}

.home-about .about-grid {
    display: grid;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(2, 1fr);
    grid-auto-rows: minmax(150px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b";
    padding: 45 45 45 45;
    margin-top: 20px;
    margin-bottom: 20px;
}

.about-grid .item1 {
    grid-area: a;
}

.about-grid .item1 .img-about {
    background-image: url("../images/body5.jpg");
    height: 60vh;
    background-position: center;
    background-size: cover;
    margin: 20px;
    border-radius: 30px;
}

.img-text-about {
    color: white;
    text-align: center;
    padding-top: 250px;
    font-size: 50px;
    font-family: 'Kdam Thmor Pro', sans-serif;
}

.about-grid .item2 {
    grid-area: b;
}

.about-grid .item2 .topic1 {
    font-size: 30px;
}

.about-grid .item2 .topic2 {
    font-size: 50px;
    color: black;
    font-family: 'Kdam Thmor Pro', sans-serif;
    font-style: italic;
    font-weight: bold;
}

.more-about-btn {
    border: 2px solid orange;
    height: 50px;
    padding-left: 35px;
    padding-right: 35px;
    margin-top: 40px;
    text-transform: uppercase;
    font-weight: bold;
    transition: 0.5s;
}

.more-about-btn:hover {
    background-color: orange;
    color: white;
    cursor: pointer;
}

.team-members {
    background-image: url("../images/body-about.jpg");
    height: 100vh;
    background-position: center;
    background-size: cover;
    padding: 50px 30px 50px 30px;
    /* padding--> top,right,bottom,left */
}

.team-members .title {
    color: white;
    text-align: center;
    font-size: 50px;
    font-family: 'Kdam Thmor Pro', sans-serif;
}

.team-members .body {
    padding: 10px;
}

.team-members .body .team-grid {
    display: grid;
    width: 100%;
    height: auto;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(150px, auto);
    grid-gap: 1rem;
    grid-template-areas: "a b c d";
    padding: 45 45 45 45;
    margin-top: 20px;
    margin-bottom: 20px;
}

.team-grid .item1,
.item2,
.item3,
.item4 {
    border: 1px solid white;
    padding: 60px 20px 60px 20px;
}

.team-grid .item1 {
    grid-area: a;
}

.team-member-profile {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    margin-left: 28%;
}

.team-name {
    text-align: center;
    color: white;
    padding-top: 15px;
    font-size: 25px;
}

.team-post {
    text-align: center;
    color: orange;
    text-transform: uppercase;
    font-size: 15px;
    font-style: italic;
}

.member-infor {
    padding-top: 20px;
    color: white;
    text-align: center;
}

@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
    .body-home {
        width: 100%;
        height: 100%;
        background-image: url("../images/body5.jpg");
    }
    .body-home .topic {
        padding-top: 210px;
        color: white;
        font-family: 'Kdam Thmor Pro', sans-serif;
        font-size: 200%;
        text-align: center;
    }
    .body-home .person {
        margin-top: 15px;
        color: orange;
        text-align: right;
        padding-right: 20px;
        font-size: 150%;
        font-style: italic;
        padding-bottom: 50px;
    }
    .brands-grid {
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(2, 1fr);
        grid-auto-rows: minmax(150px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a b" "c d" "e f";
        padding: 45 45 45 45;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .home-about .about-grid {
        display: grid;
        width: 100%;
        height: auto;
        grid-template-columns: repeat(1, 1fr);
        grid-auto-rows: minmax(150px, auto);
        grid-gap: 1rem;
        grid-template-areas: "a" "b";
        padding: 45 45 45 45;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .about-grid .item2 .topic2 {
        font-size: 40px;
    }
    .img-text-about {
        font-size: 40px;
    }
}
