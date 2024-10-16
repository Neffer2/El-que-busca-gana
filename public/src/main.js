import { Boot } from './scenes/boot.js';
import { Preloader } from './scenes/preloader.js';
import { Game } from './scenes/game.js';
import { GameOver } from './scenes/gameover.js';

const config = {
    type: Phaser.AUTO,
    width: 1920,
    height: 1080,
    parent: 'game-container',
    scale: {
        mode: Phaser.Scale.FIT,
        fullscreenTarget: 'game-container',
    },
    scene: [Boot, Preloader, Game, GameOver],
    physics: {
        default: 'arcade',
        arcade: {
            // gravity: { y: 1000 },
            // debug: true
        }
    },
    transparent: true
};

export const game = new Phaser.Game(config);