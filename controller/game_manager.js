let gameLoopInterval;

export let gameData = {
    currentBalance: 0,
    currentIncomePerSecond: 0,
    all_assets: []
}

const buildingsNameOrder = ["Advanced Hardware", "Increased Infrastructure", "Frequency Relay", "Multiple Cyphers", "Movable Bases"];
const itemsNameOrder = [];

const buildingsParams = new Map();
const itemsParams = new Map();

/* --- Classes --- */
class Building {
    constructor(name, increasePerSecond, costValue, element) {
        this.name = name;

        this.costValue = costValue;
        this.resellValue = Math.floor(this.costValue * 0.9);

        this.increasePerSecond = increasePerSecond;
        this.totalBuildings = 0;

        this.elementBuyText = element;
        this.costMultiplier = 1.2;
    }

    buy() {
        // check if you have enough money
        if (gameData.currentBalance < this.costValue) {
            return false;
        }
        else {
            // if yes buy it
            this.totalBuildings++;
            this.getTotalPerSecond();
            // change cost
            this.costValue = Math.floor( this.costValue * this.costMultiplier );
            this.elementBuyText = this.costValue;
        }
    }

    sell() {
        // check if there are buildings to sell
        if (this.totalBuildings === 0) {
            return false;
        }
        else {
            // sell it
            this.totalBuildings--;
            gameData.currentBalance += this.resellValue;
        }

    }

    getTotalPerSecond() {
        return this.totalBuildings * this.increasePerSecond
    }

    getInsides() {
        // equivalent of var dump
    }
}

class Item {}

function StartGame() {
    // insert 5 start buildings
    for (let i = 0; i < 5; i++) {
        buildingsParams.get(buildingsNameOrder[i]);
    }

    // insert first item

    gameLoopInterval = setInterval(gameLoop, 1000);
}

function gameLoop() {}