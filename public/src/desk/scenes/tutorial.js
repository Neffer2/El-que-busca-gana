let width, height, mContext;

export class Tutorial extends Phaser.Scene {
    constructor ()
    {
        super('Tutorial');
    }

    preload ()
    {

    }

    create ()
    {
        width = this.game.config.width;
        height = this.game.config.height;
        mContext = this;

        mContext.add.image((width/2), (height/2), 'bg-cj').setScale(1);
        mContext.add.image((width/2), (height/2) + 80, 'cj').setScale(1);
        let x = mContext.add.image((width/2) + 395, (height/2) - 340, 'x-cj').setInteractive();

        x.on('pointerdown', function (pointer)
        {
            x.setScale(1.2);
            setTimeout(() => {
                mContext.scene.start('Game');
            }, 500);
        });

        x.on('pointerout', () => {
            x.setScale(1);
        });
    }
}
