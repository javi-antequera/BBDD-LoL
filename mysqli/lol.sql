CREATE DATABASE lol;

CREATE TABLE champ(
	id INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255),
    rol ENUM("Assasin","Fighter","Marksman","Mage","Support","Tank"),
    difficulty ENUM("Low","Moderated","High"),
    `description` TEXT
);
INSERT INTO champ VALUES(0,"Ashe","Marksman","Moderated","Iceborn warmother of the Avarosan tribe, Ashe commands the most populous horde in the north. Stoic, intelligent, and idealistic, yet uncomfortable with her role as leader, she taps into the ancestral magics of her lineage to wield a bow of True Ice. With her people's belief that she is the mythological hero Avarosa reincarnated, Ashe hopes to unify the Freljord once more by retaking their ancient, tribal lands.");
INSERT INTO champ VALUES(0,"Ari","Mage","Moderated","Innately connected to the latent power of Runeterra, Ahri is a vastaya who can reshape magic into orbs of raw energy. She revels in toying with her prey by manipulating their emotions before devouring their life essence. Despite her predatory nature, Ahri retains a sense of empathy as she receives flashes of memory from each soul she consumes.");
INSERT INTO champ VALUES(0,"Bard","Support","High","A traveler from beyond the stars, Bard is an agent of serendipity who fights to maintain a balance where life can endure the indifference of chaos. Many Runeterrans sing songs that ponder his extraordinary nature, yet they all agree that the cosmic vagabond is drawn to artifacts of great magical power. Surrounded by a jubilant choir of helpful spirit meeps, it is impossible to mistake his actions as malevolent, as Bard always serves the greater good... in his own odd way.");
INSERT INTO champ VALUES(0,"Kled","Fighter","Moderated","A warrior as fearless as he is ornery, the yordle Kled embodies the furious bravado of Noxus. He is an icon beloved by the empire's soldiers, distrusted by its officers, and loathed by the nobility. Many claim Kled has fought in every campaign the legions have waged, has “acquired” every military title, and has never once backed down from a fight. Though the truth of the matter is often questionable, one part of his legend is undeniable: Charging into battle on his un-trusty steed, Skaarl, Kled fights to protect what's his… and to take whatever he can get.");
INSERT INTO champ VALUES(0,"Talon","Assasin","Moderated","Talon is the knife in the darkness, a merciless killer able to strike without warning and escape before any alarm is raised. He carved out a dangerous reputation on the brutal streets of Noxus, where he was forced to fight, kill, and steal to survive. Adopted by the notorious Du Couteau family, he now plies his deadly trade at the empire's command, assassinating enemy leaders, captains, and heroes… as well as any Noxian foolish enough to earn the scorn of their masters.");

 CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255),
    `username` VARCHAR(255),
    `password` VARCHAR(255),
    `email` VARCHAR(255),
 );
 INSERT INTO users VALUES(0,"admin","admin","admin","admin@gmail.com");