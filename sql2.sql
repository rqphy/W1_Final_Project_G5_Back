CREATE TABLE infos (
    id_animals INT(3) NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    zone INT(3) NOT NULL,
    weight VARCHAR(20) NULL,
    size VARCHAR(50) NULL,
    longevity VARCHAR(150) NULL,
    reproduction VARCHAR(500) NULL,
    family VARCHAR(30) NULL,
    species VARCHAR(100) NULL,
    link VARCHAR(25) NULL,
    video_link VARCHAR(50) NULL,
    details VARCHAR(500) NULL,
    PRIMARY KEY (id_animals)
) ENGINE=INNODB ;

INSERT INTO infos (name, zone, weight, size, longevity, reproduction, family, species, link, video_link, details) VALUES
('yvette the pink shrimp', 0, 'Around 10g','5 tot 10 cm', '2 years', 'The females lay 50,000 to 1 million eggs, which hatch after some 24 hours.', 'Pandalidae', 'P. borealis', '_yvette', 'XUVerZsbYiw', 'Some shrimps, known as cleaner shrimp, live of grooming bigger fish and eating their parasites and dead skin. Others are fierce predators, like the snapping shrimp, that snaps its claws to create a shock wave that stuns preys.'),
('boop the black seadevils', 2, 'Around 10g', '20cm for females and 3cm for males', '2-4 years', 'Release floating eggs into the water.',NULL,NULL, '_boop','XUVerZsbYiw', ' The female being larger, she lures preys thanks to her glowing appendix to then trap then in her jaw. The male bites into the female’s skin to live off her hunting and reproduce.'),
('fofo the whale shark', 1, '2 to 12 tons', '4 to 14 m', '130 years', 'New born whale shark → ~ 50cm. Ovoviviparous (eggs develop in its uterus) → hypothesis', 'Rhincodontidae', 'Orectolobiforme', '_boop', 'uQrBwN39LJI', 'Speed: 5 km / h on average. It is the largest fish still alive. Eats plankton and other small fish. It is not the prey of any predators outside the killer whale. Threatened by overfishing and poaching since its fin can be worth € 650 per kg.'), 
('dozy the giant squid', 1, '150 to 275kg', '10 to 13m', '5 years', 'he giant squid lives at depths exceeding 1,000 meters and is only found on the surface.', 'pandalidae', 'crustacean', '_dozy', 'okBpSCqrNFA', 'Rubbery texture, has the ability to lengthen and retract its tentacles at will. In the open air, his body deforms at the slightest touch.'), 
('speedy the snailfish', 3, '11kg', 'Between 5 and 70cm', '100 to 150 years', 'the species lay eggs of relatively large size (diameter up to 9.4 mm or 0.37 inch).', 'Liparidae', 'Liparis', '_speedy', 'uh31-pXhBjU', 'About 410 described species, Snailfish are scaleless with a thin, loose  gelatinous skin. Their teeth are small and simple with blunt cusps. The deep-sea species have prominent, well-developed sensory pores on the head.'), 
('harry the regalec', 1, '150 to 260kg', 'Around 6 to 12m', '3 to 5 years', 'The laying of eggs takes place between July and December. The eggs float near the surface until they hatch.', 'Regalacidae', 'Lampridiformes', '_harry', 'OK7R-T7o9TU', 'Up to 800 m deep. Feeds on fish, cephalopods and noctiluques. Full length orsal fin, pectoral fins and long, paddle-like paddle fins. Its coloration is silver with dark marks, and its fins are red. Abundance: extremely rare'),
('surfy the orca', 0, '5 to 8 tons', '5 to 9m', 'male 30 years / female 50 years', 'Gestation: 16 to 17 months → birth from autumn to spring. Orca new born → ~ 1.8 m and ~ 200kg', 'Delphinidae', 'Cetecea', '_surfy', 'pEP0sMO-nUQ', 'Speed: 6 to 10 km / h on average and 40 km / h max during hunting 4 to 10 min in snorkeling → up to 260 m deep. Top of the food chain. It is quite simply the largest predator in the world. Therefore, it reigns on the seas and survives because it is a “super” predator. Endangered species due to pollution and fishing.'), 
('dipsy the giant octopus', 1, '50 to 180kg', '5 to 9m', '3 to 5 years', "Male dies after depositing seed in female's breathing port. The female protects her eggs for 150 days without feeding and dies", 'Octopodidae', 'Cephalopod', '_dipsy', 'yE0QqxwyL_8', 'It can camouflage herself thanks to its skin. It sees in black and white. Eats molluscs and all kinds of fish. 8 arms and 200 suction cups.'), 
('rorry the common rorqual', 0, '70 tons', '15 to 20m', '90 years','Gestation lasts 11 months. At birth, the calf is 6 meters long and weighs 3 to 4 tonnes.', 'Balaenopteridae', 'cetacea', '_rorry', NULL, 'It is the second largest animal after the blue whale. Each side of his upper jaw has 300 to 400 teeth up to 75 cm. It dives up to 600 m deep. Common rorqual feeds on krill, small fish and cephalopods. It advances at an average speed of 37 km / h. He is threatened because he has been extensively hunted.'), 
('scotty the scotoplane', 2, NULL, '10 to 20cm', '5 years','Embryos develop into planktotrophic larvae then into doliolaria metamorphose into juvenile sea cucumbers.', 'elpidiadae', 'echinoderms', '_scotty', NULL, 'The scotoplane feeds mainly on small organic particles. It evolves by a horde of around 300 individuals. It can go from "inflated" to "deflated" in seconds. They have between five and seven pairs of "feet" for walking, of which the enlarged tube feet are used for locomotion'), 
('roberto the cachalot', 2, '50 tons', '20m', '70 years', 'Males engage in fierce battles to conquer females. Gestation from fourteen to sixteen months.', 'Physeteridae', 'cetacea', '_roberto', NULL, 'The cachalot feeds on cephalopods, fishs, benthic fish, even sharks. It’s the largest carnivore in the world. It has the most powerful sound emitted by an animal. Its dives can reach 3,000 to 3,500 meters. Its average speed is 8 km / h but it can push peak speeds reaching 30 km / h. The cachalot is threatened because of overfishing and poaching but also because of pollution.'), 
('popole the lute tutle', 1, '300 to 450kg', '1.5 to 2m', '50 years', 'The sexual maturity of is reached around the age of 612; for others, it is between 10 and 12 years old.', 'Dermochelyidae', 'dermochelys', '_popole', NULL, NULL), 
('pit the great white shark', 2, '680 to 2,000 kg', '4 to 5m', '40 years', 'Gestation would range from 12 to 18 months and the female would only reproduce every two years.', 'lamnidae', 'lamniformes', '_pit', NULL, 'Speed : between 3 to 5 km/h. It is lonely and it takes second place in the ocean food chain just behind the orca. It feeds on everything but mainly large fish such as seals, dolphins. The great white shark is hunted for its flesh and fins but also for its teeth which are sold as souvenirs to tourists.'), 
('max the blue dolphin', 0, '80 to 150kg', '1.9 to 2.6m', '75 years', 'Gestation takes place every 2-3 years and lasts 12 months. She gives birth to a single dolphin.', 'Delphinidae', 'Stenella', '_max', NULL, 'Speed : on average 35 km/h but it can reach 60mk/h in full speed. It dives 200m deep. Travel in groups never alone. It is very sociable and oftens comes to play in front of boats leaping off the water.'), 
('cookie the humpback whale', 0, '20 to 25 tons', '13 to 14m', '40 years', 'Their gestation periods take place in winter with courtship displays. It lasts 12 months and at birth she measure 4 meters and weighs 700kg.', 'Delphinidae', 'Megaptera', '_cookie', NULL, 'Can jump 5 meters out of the water. It only fears the orca. Can travel 25 000km per year. It eats little fish. Dives between 8 and 15 mintues.'), 
('marcus the dumbo octuopus', 3, 'Around 500g', 'Up to 20cm', '4 years', 'There is no special breeding season. The female stores the eggs until the conditions are favorable. She then lays them on the seafloor, where they hatch and survive on their own.', 'Opisthoteuthidae', 'Grimpoteuthis', '_marcus', '7XqSvjLRC-k', 'This octopus is called Dumbo after its fins reminding of the fictional elephant’s hears. It moves around by creating impulses with its arms, ejecting water from its mantle or waving its fins.'),
('plastic bag', 10, '20g', '50 cm', '250 years', 'They reproduce because of people who are not careful or they throw their waste. Rivers and seas are not a place to throw your rubbish. If you do that you may kill turtles and dolphins', 'pollution', NULL, '_plastic', NULL, '4 billion plastic bags thrown into the ocean every day and it will increase further over the years. Global plastic production is constantly increasing. We are at 322 million tonnes of plastic per year'), 
('nuclear waste', 10, 'undefined', 'undefined', 'from 30 years to thousands or even millions of years', 'The more nuclear plants there are, the more waste there will be. Nuclear waste must be kept and not thrown into the sea.', 'pollution', NULL, '_nuke', NULL, 'Nuclear waste going to the ocean can be consumed by a fish, which in turn contaminates a fish. Humans who eat contaminated marine food are likely to have health problems.'), 
('poaching', 10, 'human', 'human', 'forever', NULL, 'killer', 'human', '_poach', NULL, 'Since the man has started to sail the seas, he has abundantly drawned from the resources of the oceans, endangering species.');