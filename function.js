const TRENDING_CARD_LIMIT = 10;

const trendingProducts = [
  {
    id: "03ba79ab-f9f4-46b1-9838-11cf7825a8de",
    brand: "Balenciaga",
    name: "Black",
    price: 950,
    image:
      "https://images.stockx.com/images/Balenciaga-x-Crocs-Hardcrocs-Sandal-Black.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1645735398",
  },
  {
    id: "19536a9c-d335-414f-afe3-bf9096282c7b",
    brand: "Balenciaga",
    name: "Green (W)",
    price: 625,
    image:
      "https://images.stockx.com/images/Balenciaga-x-Crocs-Madame-80MM-Green-W.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1637172192",
  },
  {
    id: "da56817b-d77b-454e-aba5-ed1b8544e199",
    brand: "Versace",
    name: "x Kith Black",
    price: 875,
    image:
      "https://images.stockx.com/images/Versace-Amico-Trainer-Low-x-Kith-Black.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1626900017",
  },
  {
    id: "e1038dbe-cd59-4a0d-b1bf-8d5307ce479e",
    brand: "Gucci",
    name: "Beige Green Yellow (W)",
    price: 1290,
    image:
      "https://images.stockx.com/images/Gucci-x-Balenciaga-Triple-S-The-Hacker-Project-Beige-Green-Yellow-W.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1637096132",
  },
  {
    id: "e5352103-71dc-4b8a-bdca-b561aa924143",
    brand: "Jordan",
    name: "Denim (W)",
    price: 170,
    image:
      "https://images.stockx.com/images/Air-Jordan-1-High-OG-Denim-W.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1649445189",
  },
  {
    id: "cad58058-e24d-4317-a9f7-73a9e1fab25d",
    brand: "Versace",
    name: "x Kith Black (W)",
    price: 1695,
    image:
      "https://images.stockx.com/images/Versace-Leather-Stiletto-x-Kith-Womens-Black.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1626900005",
  },
  {
    id: "135b8dc3-eb71-4002-84da-0cefc6f0a7fb",
    brand: "Jordan",
    name: "Maison Chateau Rouge",
    price: 200,
    image:
      "https://images.stockx.com/images/Air-Jordan-2-Retro-Maison-Chateau-Rouge.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1651194956",
  },
  {
    id: "6672f081-b5c6-4901-9611-789e6d7a25c1",
    brand: "Jordan",
    name: "Zen Master (GS)",
    price: 110,
    image:
      "https://images.stockx.com/images/Air-Jordan-1-Mid-SE-Zen-Master-GS-1.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1651597906",
  },
  {
    id: "f3a9f8b2-e45e-4a8a-9430-5f455ccc8abb",
    brand: "Chanel",
    name: "Black (Women's)",
    price: 690,
    image:
      "https://images.stockx.com/images/Chanel-Low-Top-Trainer-Black-W-Product.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1647439346",
  },
  {
    id: "1e07cc2e-8306-4bd6-bab5-d400a3b4e96b",
    brand: "Chanel",
    name: "Pharrell White Multi-Color",
    price: 1600,
    image:
      "https://images.stockx.com/images/Chanel-Sneakers-Pharrell-White-Multi-Color-Product.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1618257699",
  },
  {
    id: "6a4d9a17-a1e4-4259-911c-9cac07fab14c",
    brand: "Chanel",
    name: "Black Gold (Women's)",
    price: 1200,
    image:
      "https://images.stockx.com/images/Chanel-Tweed-Leather-CC-Logo-Trainer-Black-Gold-Womens.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1709175134",
  },
  {
    id: "bb585b0a-0283-4209-a771-0e52e0f233b3",
    brand: "Chanel",
    name: "White Black (Women's)",
    price: 1275,
    image:
      "https://images.stockx.com/images/Chanel-Suede-Trainer-White-Black-W.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1661288731",
  },
  {
    id: "2d7fcf3b-2c97-490b-98ee-b5daff38b6d8",
    brand: "Chanel",
    name: "Pharrell Multi-Color",
    price: 1200,
    image:
      "https://images.stockx.com/images/Chanel-Mules-Pharrell-Multi-Color-1.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1637096148",
  },
  {
    id: "f6ca0118-c0f9-4a28-be28-7e05f5645cad",
    brand: "Chanel",
    name: "CC White Navy (Women's)",
    price: 950,
    image:
      "https://images.stockx.com/images/Chanel-Low-Top-Trainer-CC-White-Navy-W-Product.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1616700622",
  },
  {
    id: "a2344f00-4dcb-4139-b0a7-41a28bd83bc2",
    brand: "Chanel",
    name: "Pharrell White Multi-Color (Women's)",
    price: 1600,
    image:
      "https://images.stockx.com/images/Chanel-Sneakers-Pharrell-White-Multi-Color-W-Product.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1618257316",
  },
  {
    id: "2fd67812-b76e-4512-aaf6-b1e7c3d51426",
    brand: "Chanel",
    name: "White Leather",
    price: 0,
    image:
      "https://images.stockx.com/images/Chanel-23-A-Collection-White-Leather.jpg?fit=fill&bg=FFFFFF&w=300&h=214&fm=webp&auto=compress&trim=color&q=90&dpr=2&updated_at=1686871738",
  },

  // Add more candidate products here.
  // To reliably show 10 working cards, this array should contain 20–30 products.
];

function imageLoads(url) {
  return new Promise((resolve) => {
    if (!url) {
      resolve(false);
      return;
    }

    const image = new Image();

    image.onload = function () {
      resolve(true);
    };

    image.onerror = function () {
      resolve(false);
    };

    image.src = url;
  });
}

function buildTrendingCard(product) {
  return `
        <div class="div">
            <a 
                href="sneakers-redirect.php?id=${product.id}" 
                class="image-frame"
                style="background-image: url('${product.image}')">
            </a>

            <div class="sneaker-details">
                <div class="sneaker-title">
                    <div class="sneaker-brand">
                        <h4>${product.brand}</h4>
                    </div>
                    <div class="sneaker-name">
                        <h5>${product.name}</h5>
                    </div>
                </div>
                <div class="sneaker-price">
                    <h3>$${product.price}</h3>
                </div>
            </div>
        </div>
    `;
}

async function renderWorkingTrendingCards() {
  const trendingContainer = document.getElementById("trending-sneakers");

  if (!trendingContainer) {
    return;
  }

  trendingContainer.innerHTML = "<p>Loading trending sneakers...</p>";

  const workingProducts = [];

  for (const product of trendingProducts) {
    if (workingProducts.length >= TRENDING_CARD_LIMIT) {
      break;
    }

    const isWorking = await imageLoads(product.image);

    if (isWorking) {
      workingProducts.push(product);
    }
  }

  if (workingProducts.length === 0) {
    trendingContainer.innerHTML =
      "<p>No trending sneakers available right now.</p>";
    return;
  }

  trendingContainer.innerHTML = workingProducts.map(buildTrendingCard).join("");
}

function getBackgroundImageUrl(element) {
    const backgroundImage = element.style.backgroundImage;
    const match = backgroundImage.match(/url\(["']?(.*?)["']?\)/);

    return match ? match[1] : "";
}

function checkImageLoads(url) {
    return new Promise((resolve) => {
        if (!url) {
            resolve(false);
            return;
        }

        const img = new Image();

        img.onload = function () {
            resolve(true);
        };

        img.onerror = function () {
            resolve(false);
        };

        img.src = url;
    });
}

function getCatalogueCardLimit() {
    const catalogue = document.getElementById("sneaker-catalogue");

    if (!catalogue) {
        return 12;
    }

    const validCards = catalogue.querySelectorAll(".div:not(.catalogue-card-broken)");

    if (validCards.length === 0) {
        return 12;
    }

    const firstCard = validCards[0];
    const cardHeight = firstCard.offsetHeight || 240;

    const headerHeight = document.querySelector("header")?.offsetHeight || 0;
    const footerHeight = document.querySelector("footer")?.offsetHeight || 0;

    const availableHeight = window.innerHeight - headerHeight - footerHeight - 48;
    const rows = Math.max(2, Math.floor(availableHeight / cardHeight));

    const computedStyle = window.getComputedStyle(catalogue);
    const columns = computedStyle.gridTemplateColumns.split(" ").filter(Boolean).length || 1;

    return Math.max(columns * rows, columns * 2);
}

function applyCatalogueCardLimit() {
    const catalogue = document.getElementById("sneaker-catalogue");

    if (!catalogue) {
        return;
    }

    const limit = getCatalogueCardLimit();
    const validCards = Array.from(
        catalogue.querySelectorAll(".div:not(.catalogue-card-broken)")
    );

    validCards.forEach((card, index) => {
        card.classList.toggle("catalogue-card-hidden", index >= limit);
    });
}

async function prepareCatalogueCards() {
    const catalogue = document.getElementById("sneaker-catalogue");

    if (!catalogue) {
        return;
    }

    const cards = Array.from(catalogue.querySelectorAll(".div"));

    for (const card of cards) {
        const imageFrame = card.querySelector(".image-frame");
        const imageUrl = imageFrame ? getBackgroundImageUrl(imageFrame) : "";
        const imageWorks = await checkImageLoads(imageUrl);

        if (!imageWorks) {
            card.classList.add("catalogue-card-broken");
            card.remove();
        }
    }

    applyCatalogueCardLimit();
}

let catalogueResizeTimer;

window.addEventListener("resize", function () {
    clearTimeout(catalogueResizeTimer);

    catalogueResizeTimer = setTimeout(function () {
        applyCatalogueCardLimit();
    }, 150);
});

document.addEventListener("DOMContentLoaded", function () {
    prepareCatalogueCards();
});

async function keepFirstWorkingCatalogueCards(limit = 12) {
    const catalogueContainer = document.getElementById("sneaker-catalogue");

    if (!catalogueContainer) {
        return;
    }

    const cards = Array.from(catalogueContainer.querySelectorAll(".div"));

    let workingCardCount = 0;

    for (const card of cards) {
        const imageFrame = card.querySelector(".image-frame");
        const imageUrl = imageFrame ? getBackgroundImageUrl(imageFrame) : "";
        const isWorkingImage = await checkImageLoads(imageUrl);

        if (!isWorkingImage) {
            card.remove();
            continue;
        }

        workingCardCount++;

        if (workingCardCount > limit) {
            card.remove();
        }
    }

    if (workingCardCount === 0) {
        catalogueContainer.innerHTML = '<p class="catalogue-message">No sneaker images are available right now.</p>';
    }
}

document.addEventListener("DOMContentLoaded", function () {
    keepFirstWorkingCatalogueCards(12);
});

document.addEventListener("DOMContentLoaded", renderWorkingTrendingCards);

const welcomeTimeout = setTimeout(welcomePopup, 2000);

var state = false;
var searchOn = false;
var navBtnsExpand = false;
var navBtnsShow = false;
var inputShow = false;

window.onscroll = function () {
  scrollIndiator();
  navBtnsExpand = false;
};

function scrollIndiator() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  var scrollEvent = this.oldScroll > this.scrollY;
  this.oldScroll = this.scrollY;

  new ResizeObserver((entries) => {
    //for when display width is less than  720px
    if (scrollEvent == false && 720 > entries[0].contentBoxSize[0].inlineSize) {
      document.querySelector(".nav-links").style.height = "0px";
      document.querySelector(".collapse-navbtn").style.display = "none";
      document.querySelector(".scroll-indicator").style.display = "flex";
      document.querySelector(".scroll-indicator").style.marginTop = "70px";
      document.querySelector(".section").style.marginTop = "70px";
      document.querySelector(".scroll-indicator").style.marginLeft = "0px";
      document.querySelector(".scroll-indicator").style.marginRight = "0px";
      document.querySelector(".scroll-indicator").style.width = scrolled + "%";
    } else if (
      scrollEvent == true &&
      720 > entries[0].contentBoxSize[0].inlineSize
    ) {
      document.querySelector(".nav-links").style.height = "70px";
      document.querySelector(".collapse-navbtn").style.display = "flex";
      document.querySelector(".scroll-indicator").style.display = "flex";
      document.querySelector(".scroll-indicator").style.marginTop = "140px";
      document.querySelector(".section").style.marginTop = "140px";
      document.querySelector(".scroll-indicator").style.marginLeft = "0px";
      document.querySelector(".scroll-indicator").style.marginRight = "0px";
      document.querySelector(".scroll-indicator").style.width = scrolled + "%";
    } else if (1211 > entries[0].contentBoxSize[0].inlineSize) {
      document.querySelector(".nav-links").style.height = "70px";
      document.querySelector(".collapse-navbtn").style.display = "flex";
      document.querySelector(".scroll-indicator").style.display = "flex";
      document.querySelector(".scroll-indicator").style.marginTop = "70px";
      document.querySelector(".section").style.marginTop = "70px";
      document.querySelector(".scroll-indicator").style.marginLeft = "0px";
      document.querySelector(".scroll-indicator").style.marginRight = "0px";
      document.querySelector(".scroll-indicator").style.width = scrolled + "%";
    }
    //for when display width is less than  1211px
    else if (scrolled > 1 && entries[0].contentBoxSize[0].inlineSize < 1211) {
      document.querySelector(".nav-links").style.height = "70px";
      document.querySelector(".collapse-navbtn").style.display = "flex";
      document.querySelector(".scroll-indicator").style.display = "flex";
      document.querySelector(".scroll-indicator").style.marginTop = "70px";
      document.querySelector(".scroll-indicator").style.width = scrolled + "%";
    } else if (scrolled < 1 && entries[0].contentBoxSize[0].inlineSize < 1211) {
      document.querySelector(".scroll-indicator").style.width = "0%";
    }
    //for when display width is more than 1211px
    else if (entries[0].contentBoxSize[0].inlineSize > 1211) {
      document.querySelector(".nav-links").style.height = "70px";
      document.querySelector(".collapse-navbtn").style.display = "none";
      document.querySelector(".scroll-indicator").style.display = "flex";
      document.querySelector(".scroll-indicator").style.marginTop = "70px";
      document.querySelector(".scroll-indicator").style.width = scrolled + "%";
    }
  }).observe(document.body);
}

function togglePopup() {
  state = !state;
  var popup = document.querySelector(".nav-popup");
  var popupBtn = document.querySelector(".nav-expand");
  if (state == true) {
    popup.style.display = "flex";
    document.querySelector(".fa-bars").style.transform = "rotate(90deg)";
    document.documentElement.style.overflow = "hidden";
    document.addEventListener("click", function (e) {
      var navPopup = document.querySelector(".nav-popup");
      if (!navPopup.contains(e.target) && !popupBtn.contains(e.target)) {
        popup.style.display = "none";
        document.querySelector(".fa-bars").style.transform = "rotate(0deg)";
        state = false;
      }
    });
  } else {
    popup.style.display = "none";
    document.querySelector(".fa-bars").style.transform = "rotate(0deg)";
    document.documentElement.style.overflow = "visible";
  }
  new ResizeObserver((entries) => {
    if (entries[0].contentBoxSize[0].inlineSize > 720) {
      document.documentElement.style.overflow = "visible";
    } else if (
      entries[0].contentBoxSize[0].inlineSize < 720 &&
      popup.style.display == "flex"
    ) {
      document.documentElement.style.overflow = "hidden";
    }
  }).observe(document.body);
}

function collapseNavbtns() {
  navBtnsExpand = !navBtnsExpand;
  var navBtnsWrap = document.querySelector(".nav-links");
  if (navBtnsExpand == true) {
    navBtnsWrap.style.height = "auto";
  } else {
    navBtnsWrap.style.height = "70px";
  }
  console.log(navBtnsExpand);
}

function toggleInput() {
  var searchInput = document.querySelector("#search-input");
  var navExpand = document.querySelector(".nav-expand");
  var collapseNavbtn = document.querySelector(".collapse-navbtn");
  var logo = document.querySelector(".logo");
  var navSearch = document.querySelector(".nav-search");
  searchInput.style.display = "block";
  navExpand.style.zIndex = "-100";
  collapseNavbtn.style.zIndex = "-100";
  searchInput.focus();
  logo.style.zIndex = "-100";
  navSearch.className = "nav-search nav-search-after";
  navSearch.setAttribute("onclick", "inputFetch()");
}

function inputFetch() {
  var input = document.querySelector("#search-input");
  if (input.value == "") {
    alert("Please type something..");
  } else {
    console.log(input.value);
  }
}

var input = document.querySelector("#search-input");
input.addEventListener("keyup", function (e) {
  if (e.key == "Enter") {
    if (input.value == "") {
      alert("Please type something..");
    } else {
      console.log(input.value);
    }
  }
});

document.addEventListener("click", function (e) {
  var searchBar = document.querySelector(".search-btn-field");
  var navSearch = document.querySelector(".nav-search");
  var searchInput = document.querySelector("#search-input");
  var navExpand = document.querySelector(".nav-expand");
  var collapseNavbtn = document.querySelector(".collapse-navbtn");
  var logo = document.querySelector(".logo");
  if (!searchBar.contains(e.target) && searchInput.style.display == "block") {
    searchInput.style.display = "none";
    collapseNavbtn.style.zIndex = "100";
    navExpand.style.zIndex = "100";
    logo.style.zIndex = "100";
    navSearch.className = "nav-search";
    navSearch.setAttribute("onclick", "toggleInput()");
    inputShow = !inputShow;
  }
});

document.addEventListener("click", function (e) {
  var navBtnsWrap = document.querySelector(".nav-links");
  var navCollapseBtn = document.querySelector(".collapse-navbtn");
  if (
    !navCollapseBtn.contains(e.target) &&
    !navBtnsWrap.contains(e.target) &&
    navBtnsWrap.style.height == "auto"
  ) {
    navBtnsWrap.style.height = "70px";
    navBtnsExpand = !navBtnsExpand;
  }
});

document.addEventListener("click", function (e) {
  var navBtnsWrap = document.querySelector(".nav-links");
  var navCollapseBtn = document.querySelector(".collapse-navbtn");
  if (
    !navCollapseBtn.contains(e.target) &&
    !navBtnsWrap.contains(e.target) &&
    navBtnsWrap.style.height == "auto"
  ) {
    navBtnsWrap.style.height = "0px";
    navBtnsExpand = !navBtnsExpand;
  }
});

function welcomePopup() {
  var welcomePopupBg = document.querySelector("#welcome-popup-bg");
  var welcomePopup = document.querySelector("#welcome-popup");
  welcomePopupBg.style.marginTop = "-100%";
  welcomePopup.style.background =
    "linear-gradient(to right, red 100%, black 0%)";
}
