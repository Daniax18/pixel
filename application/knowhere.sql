-- PAYS

insert into pays values('PAYS_1', 'Vormir', 'mg');
insert into pays values('PAYS_2', 'Xandar', 'km');
insert into pays values('PAYS_3', 'Contraxia', 'mu');
insert into pays values('PAYS_4', 'Ego', 'mv');
insert into pays values('PAYS_5', 'Knowhere', 'sc');
-- insert into pays values('PAYS_6', 'Inde', 'in');

-- CATEGORIES
insert into categorie values('CAT1', 'AQUAIEN', 'categorie1.png', 'categorie1.png', 'AQUAMAN');
insert into categorie values('CAT2', 'BLACK PANTHERIEN', 'categorie2.png', 'categorie2.png', 'BLACK PANTHER');
insert into categorie values('CAT3', 'BLACK WIDOWIEN', 'categorie3.png', 'categorie3.png', 'BLACK WIDOWIEN');
insert into categorie values('CAT4', 'SPIDER MANIEN', 'categorie4.png', 'categorie4.png', 'SPIDER MAN');
insert into categorie values('CAT5', 'IRON MANIEN', 'categorie5.png', 'categorie5.png', 'IRON MAN');
insert into categorie values('CAT6', 'BATMANIEN', 'categorie6.png', 'categorie6.png', 'BAT MAN');

-- -----------------------------------------

-- UTILISATEURS
insert into client values(158, 'Pixel', 0, '2000-10-5', 'PAYS_1', 'pixel@gmail.com', 'pixel', 'Admin', 0, 'CAT1', 'Mon histoire');
insert into client values(159, 'Rasoa', 1, '1995-10-5', 'PAYS_2', 'rasoa@gmail.com', 'rasoa', 'RASOA GIRL',1, 'CAT2', 'Mon histoire');
insert into client values(160, 'Soa', 0, '1990-10-5', 'PAYS_3', 'soa@gmail.com', 'soa', 'KOTO MAN',1, 'CAT3', 'Mon histoire');
insert into client values(161, 'Fy', 0, '1995-10-5', 'PAYS_4', 'fy@gmail.com', 'fy', 'WI-FY',1, 'CAT4', 'Mon histoire');
insert into client values(162, 'Naivo', 1, '2005-10-5', 'PAYS_5', 'naivo@gmail.com', 'naivo', 'TRIMOBE',1, 'CAT5', 'Mon histoire');
insert into client values(163, 'Velo', 1, '2001-10-5', 'PAYS_1', 'velo@gmail.com', 'velo', 'R3',1, 'CAT5', 'Mon histoire');
insert into client values(164, 'Vololona', 0, '1998-10-5', 'PAYS_2', 'koly@gmail.com', 'koly', 'BOOGIMAN',1, 'CAT6', 'Mon histoire');
insert into client values(165, 'Manja', 0, '2002-10-5', 'PAYS_3', 'tefy@gmail.com', 'tefy', 'WRONG TURN',1, 'CAT1', 'Mon histoire');
insert into client values(166, 'Tia', 0, '1996-10-5', 'PAYS_4', 'tia@gmail.com', 'tia', 'DAFFY',1, 'CAT1', 'Mon histoire');
insert into client values(167, 'Narivony', 1, '1996-10-5', 'PAYS_5', 'rabe@gmail.com', 'rabe', 'TROZONA', 1, 'CAT2', 'Mon histoire');


-- SERVICES
insert into my_service values('SERV1', 'Entraînement physique');
insert into my_service values('SERV2', 'Entraînement mental');
insert into my_service values('SERV3', 'Rencontre avec votre Super Hero');

-- PACK

insert into pack values ('PACK1', 'Formation à distance', '12 mois', 100);
insert into pack values ('PACK2', 'Formation présentielle', '9 mois', 200);

-- ---------------------------------------------------------
-- DETAIL PACK, Make them all primary key please

insert into detail_pack values('PACK1', 'SERV1', 1);
insert into detail_pack values('PACK1', 'SERV2', 1);
insert into detail_pack values('PACK1', 'SERV3', 0);

insert into detail_pack values('PACK2', 'SERV1', 1);
insert into detail_pack values('PACK2', 'SERV2', 1);
insert into detail_pack values('PACK2', 'SERV3', 1);

-- ---------------------------------------------------------------

-- VENTE

insert into vente values('1', 159, 'PACK1', 100, '2022-01-01', '2022-03-01', 0);
insert into vente values('2', 160, 'PACK1', 100, '2022-03-03', '2022-06-06', 0);
insert into vente values('3', 161, 'PACK1', 100, '2022-04-04', '2022-07-07', 0);
insert into vente values('4', 159, 'PACK1', 100, '2022-09-09', '2022-12-12', 0);
insert into vente values('5', 160, 'PACK2', 200, '2023-01-01', '2023-03-01', 0);
insert into vente values('6', 161, 'PACK1', 100, '2023-02-01', '2023-05-01', 0);
insert into vente values('7', 159, 'PACK2', 200, '2023-07-01', '2023-10-01', 0);
insert into vente values('8', 159, 'PACK1', 100, '2023-01-01', '2023-03-01', 0);
insert into vente values('9', 160, 'PACK2', 200, '2023-07-01', '2023-10-01', 0);
insert into vente values('10', 161, 'PACK1', 100, '2023-08-01', '2023-11-01', 0);
insert into vente values('11', 162, 'PACK2', 200, '2022-01-01', '2022-03-01', 0);
insert into vente values('12', 163, 'PACK1', 100, '2022-01-01', '2022-03-01', 0);


-- -------------------------------------------------------------

-- DOONNESS ---------------------------------


-- ------------ QUESTIONS POUR LES ORIENTATIONS

insert into question_cat values('Q1', 'Quelle est votre principale motivation pour combattre le crime ?');
insert into question_cat values('Q2', 'Comment gérez-vous le stress pendant les combats ?');
insert into question_cat values('Q3', 'Comment décririez-vous votre relation avec vos alliés ?');

-- ------------ REPONSE POUR LES ORIENTATIONS

insert into reponse_cat values('R1', 'Q1', 'Protéger les innocents à tout prix.', 'CAT1', 'r1.jpg');
insert into reponse_cat values('R2', 'Q1', 'Venger une injustice personnelle.', 'CAT2', 'r2.jpg');
insert into reponse_cat values('R3', 'Q1', 'Gagner en renommée et en reconnaissance.', 'CAT3', 'r3.jpg');

insert into reponse_cat values('R4', 'Q2', 'Je me concentre sur ma respiration.', 'CAT4', 'r4.jpg');
insert into reponse_cat values('R5', 'Q2', 'Je me laisse emporter par adrénaline.', 'CAT5', 'r5.jpg');
insert into reponse_cat values('R6', 'Q2', 'Je cherche à impressionner le public.', 'CAT6', 'r6.jpg');

insert into reponse_cat values('R7', 'Q3', 'Nous sommes une famille, prêts à nous soutenir coûte que coûte.', 'CAT6', 'r7.jpg');
insert into reponse_cat values('R8', 'Q3', 'Je me méfie souvent de mes coéquipiers, mais je sais quand faire confiance.', 'CAT6', 'r8.jpg');
insert into reponse_cat values('R9', 'Q3', 'Je préfère travailler seul pour éviter les complications.', 'CAT6', 'r9.jpg');

-- -----------------------------------------------------------------
-- HABILITE PART 333


insert into hability values('HAB1', 'Force');
insert into hability values('HAB2', 'Rapidité');
insert into hability values('HAB3', 'Mentalité');
insert into hability values('HAB4', 'Spiritualité');

-- ---------------------------------------------------------------
-- PROGRAMME

insert into programme values('PR1', 'Entrainement Physique', '3 mois');
insert into programme values('PR2', 'Entrainement Mental', '3 mois');
insert into programme values('PR3', 'Entrainement Intensif', '3 mois');

-- ----------------------------------------------------------------
-- DATA FROM FITIA
insert into exercice values ('EX1','Natation 300m','PR1');
insert into exercice values ('EX2','Course à pied 1000m','PR1');
insert into exercice values ('EX3','Recontre avec votre super héros','PR1');


insert into exercice values ('EX4','Yoga 2H','PR2');
insert into exercice values ('EX5','Monologue interieur 15min','PR2');
insert into exercice values ('EX6','Recontre avec votre super héros','PR2');

insert into exercice values ('EX7','Escalade de montagne 24H','PR3');
insert into exercice values ('EX8','Saut en parachute','PR3');
insert into exercice values ('EX9','Recontre avec votre super héros','PR3');



-- ---------------------------------------------------------------
-- result_hability
insert into result_hability values('RH1', 'PR1', 'HAB1', 20);
insert into result_hability values('RH2', 'PR1', 'HAB2', 25);
insert into result_hability values('RH3', 'PR1', 'HAB3', 15);
insert into result_hability values('RH4', 'PR1', 'HAB4', 20);

insert into result_hability values('RH5', 'PR2', 'HAB1', 10);
insert into result_hability values('RH6', 'PR2', 'HAB2', 30);
insert into result_hability values('RH7', 'PR2', 'HAB3', 30);
insert into result_hability values('RH8', 'PR2', 'HAB4', 25);

insert into result_hability values('RH9', 'PR3', 'HAB1', 50);
insert into result_hability values('RH10', 'PR3', 'HAB2', 55);
insert into result_hability values('RH11', 'PR3', 'HAB3', 40);
insert into result_hability values('RH12', 'PR3', 'HAB4', 25);

-- --------------------------------------------------------------------
-- RESULTAT CAEGORIE

insert into result_categorie values('RC1', 'PR1', 'CAT1', 100);
insert into result_categorie values('RC2', 'PR1', 'CAT2', 100);
insert into result_categorie values('RC3', 'PR1', 'CAT3', 100);
insert into result_categorie values('RC4', 'PR1', 'CAT4', 100);
insert into result_categorie values('RC5', 'PR1', 'CAT5', 100);
insert into result_categorie values('RC6', 'PR1', 'CAT6', 100);

insert into result_categorie values('RC7', 'PR2', 'CAT1', 120);
insert into result_categorie values('RC8', 'PR2', 'CAT2', 120);
insert into result_categorie values('RC9', 'PR2', 'CAT3', 120);
insert into result_categorie values('RC10', 'PR2', 'CAT4', 120);
insert into result_categorie values('RC11', 'PR2', 'CAT5', 120);
insert into result_categorie values('RC12', 'PR2', 'CAT6', 120);

insert into result_categorie values('RC13', 'PR3', 'CAT1', 150);
insert into result_categorie values('RC14', 'PR3', 'CAT2', 150);
insert into result_categorie values('RC15', 'PR3', 'CAT3', 150);
insert into result_categorie values('RC16', 'PR3', 'CAT4', 150);
insert into result_categorie values('RC17', 'PR3', 'CAT5', 150);
insert into result_categorie values('RC18', 'PR3', 'CAT6', 150);

-- --------------------------------------------------------------------------

insert into programme_client values('P1', 'PR1', '176', '2022-12-12', 1);