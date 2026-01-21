let gameLoopInterval;

export let gameState = {
    currentBalance: 0,
    currentIncomePerSecond: 0,
    all_assets: []
}

const buildingsNameOrder = [];
const itemsNameOrder = [];

const buildingsParams = new Map();
const itemsParams = new Map();

/* --- Classes --- */
class Building {
    constructor(name, increasePerSecond, costValue) {
        this.name = name;

        this.costValue = costValue;
        this.resellValue = Math.floor(this.costValue * 0.9);

        this.increasePerSecond = increasePerSecond;
        this.totalBuildings = 0;
    }

    buy() {
        // check if you have enough money
        if (gameState.currentBalance < this.costValue) {
            return false;
        }
        else {
            // if yes buy it
            this.totalBuildings++;
            this.getTotalPerSecond();
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
            gameState.currentBalance += this.resellValue;
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

    // insert first item

    gameLoopInterval = setInterval(gameLoop, 1000);
}

function gameLoop() {}