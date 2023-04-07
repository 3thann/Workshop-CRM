# ***Documentation utilisateur***

## **Dashboard**
Après la page de connexion vous serez redirigé vers le dashboard ce dashboard contient :
- Deux graphiques
    - Le premier sera un “donut” affichant le nombre de client dans chaque statut
    - Le 2nd sera le nombre de contact qui nous a rejoints chaque mois
- Calendrier
    - Il permettra l'ajout et la suppression des rappels automatiques d’actions sur les prospects ou de renvoyer un mail à un client par exemple.
    - Le calendrier affichera les rappels pour les 5 prochains jours
- Action rapide
    - Vers les statuts leads
    - Vers les statuts prospects
    - Vers les statuts clients
    - Vers les entreprises

## **Gestion des statuts**
Il y a 3 types de statut. Le statut de `lead`, `prospect`, `client`. 
Chaque contact est affecté à l’un de ses statuts automatiquement grâce aux informations renseignées lors de la création du contact. 
Le statut sera changé automatiquement entre lead, prospect, client en fonction des informations renseignées dans les différentes parties tel que commande et modification.

## **La gestion des contacts**
Pour **ajouter** des contacts il faut cliquer sur le  bouton `Ajouter un contact` et remplir les informations demandées. Il est aussi possible d'ajouter un contact via des fichiers en format `.csv`, on peut exporter les données des contacts en format `.csv`.
La **modification** d'un contact est possible, il faut cliquer sur `modifier` et renseigner les nouvelles informations demandées dans le formulaire puis `valider`.
La **suppression** d'un contact est possible, il faut cliquer sur `modifier` puis `supprimer`.
Le bouton "**voir**" permet de montrer les informations du contact tel que son statut, ses actions et ses commandes.

## **Gestion des entreprises**
Pour **ajouter** des entreprises il faut cliquer sur `Entreprise` situer sur la sidebar ou dans le dashboard. Il faut renseigner le nom et `valider`.
La **modification** du nom d'une entreprise est possible. Il faut juste cliquer sur le bouton `modifier` et renseigner le nouveau nom et `valider`.
L’entreprise peut être **supprimer**. Il faut cliquer sur le bouton `modifier` puis `supprimer`. Attention cette action ne sera pas réalisable tant qu'il existera des contacts et/ou des commandes relié à cette entreprise.
Le bouton "**voir**" permet de montrer tous les contacts qui sont dans l’entreprise, le nombre de commande par contact de relié à l'entreprise et le statut de ces contacts.


## **Import/export CSV**
L’**export** de **tous** les contacts sera possible. Il sera sous format `.csv` et contiendra toutes ses informations avec son statut et sa dernière action menée. Cliquer sur le bouton `Exporter les contacts` et ceci vous permettra de télécharger le ficher `Contacts.csv` sur votre machine.
L’**import** en format `.csv` sera tout aussi possible. Le tableau doit contenir uniquement les informations des contacts sans son statut. Choisissez le statut du contact et cliquer sur le bouton `Ajouter un contact`, puis cliquer à nouveau sur le bouton `importer un contact`.

## **La gestion des utilisateurs**
L'application web propose un outil de gestion d'utilisateur intégré au CRM, seul l’administrateur y a accès. Il se trouve dans la sidebar, il suffit de cliquer sûr `Gestion des utilisateurs`.
Pour **créer** un compte il faut y ajouter les informations données dans le formulaire et cliquer sur le bouton `ajouter`. Le mot de passe est provisoire il sera changé par l'utilisateur à sa première connexion.
La modification d'un compte est possible il faut cliquer sur `modifier` et remplir les nouvelles informations demandées puis cliquer sur `valider`.
Pour **supprimer** des utilisateurs il faut cliquer sur `modifier` puis `supprimer`.
Attention il n'est pas possible de supprimer le compte administrateur.