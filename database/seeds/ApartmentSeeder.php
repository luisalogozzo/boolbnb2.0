<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Service;
use App\Apartment;
use Faker\Generator as Faker;
class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      $apartmentTemplate = [
        'title' => [
          'Marco e Laura B & B: camera doppia- Aurelio, Roma , Lazio',
          'Laterano238apartment- Celio, Roma, Lazio',
          'IN FRONT OF THE COLISEUM- Monti, Roma , Lazio',
          'Deluxe Twin Ensuite- Castro Pretorio, Roma , Lazio',
          'Rome Apartment Campo de Fiori- Ponte, Roma , Lazio',
          'Attico Luminoso Deluxe IN FRONT Quirinale',
          'Intero appartamento affittato da Mauro- Milano',
          'Incantevole appartamento Savona Navigli- Milano',
          'Open Space Loft  Area - Milano',
          'Tuscan Apt in the heart of Florence',
          'The Smallest Apartment With The Biggest View -Florence',
          'Casina B. P. - centro storico- Firenze',
          'BLUE STUDIO34 APARTMENTS- Napoli',
          'Attico vista mare al centro di Napoli',
          'At Home in the Old Naples',
          'Bilocale a due passi dal Centro di Torino',
          'Appartamento moderno, Torino Centro.',
          'Nel Cuore del Barocco Leccese',
          'Appartamento Adriana- Lecce',
          'La Piccola Corte- Lecce',
          'Appartamento in villa indipendente - Velletri',
          'La Casa Del Gatto Blu, EUR Centro.. - Roma',
          'CentralHouse in Cagliari'

        ],
        'description' => [
          'Marco e Laura B & BConfortevoli e accoglienti, tutte con servizi privati e situate al piano terra e al secondo piano.La struttura è composta da diverse stanze, tra cui camere doppie e singole (con letto aggiunto).Il B & B ha due ingressi, uno da Via Aurelia (vicino alle mura vaticane), l\'altro da Via Innocenzo XIII.Tutte le camere sono dotate di asciugacapelli, aria condizionata e riscaldamento e tv. Tutte le camere sono dotate di bagno privato con doccia, parete TV al plasma, asciugacapelli e aria condizionata e riscaldamento. Una di queste camere ha un balcone.',
          'Delizioso appartamento nel cuore di Roma, a circa 500mt dal Colosseo e altri principali siti turistici come Via dei Fori Imperiali e Domus Aurea. L\'appartamento si trova al secondo piano in un palazzo silenzioso e tranquillo con ascensore.Facilmente raggiungibile con tutti i mezzi pubblici; autobus, tram e metropolitana (fermata linea B "Colosseo").Presenti diversi ristoranti, pizzerie, bar, supermercati, banche e ufficio postale.Possibilità di offrire culla per bambini gratis.',
          'Meraviglioso appartamento, luminoso, ristrutturato da poco, confortevole e con un fascino unico, a due passi dal Colosseo e dai Fori Imperiali, ubicato in un ottimo punto di partenza per scoprire i tesori nascosti di Roma.Vicino al quartiere Rione Monti, un quartiere da esplorare ricco di locali, ristoranti, market, negozi e vicoli da scoprire.Vicino alle fermate della metro B Colosseo e Cavour e alla stazione Termini che dista solo 15 minuti a piedi.',
          'Uno dei più grandi del Residence, l’uso del ciliegio per i pavimenti siritrova negli arredi e nella scala in legno e acciaio. Posizionato al terzo piano, si sviluppa su due livelli: l’ampio e luminoso salone che si affaccia sul giardino di bamboo, è dotato di due comodi divani e televisione. Un’area ufficio con scrivania e connessione internet gratuita vi permetterà di lavorare da casa in tutta tranquillità. Vicinissimo a Stazione TerminiGrazie alle sue dimensioni, ben si presta ad ospitare famiglie o gruppi di persone: infatti i divani su richiesta possono divenire due letti da una piazza e mezza, creando così un’ulteriore zona notte. Lascala collega il salone con la sala da pranzo, dotata di tavolo in cristallo che può accomodare fino a cinque persone, una seconda televisione e l’ampia cucina abitabile, completamente attrezzata e dotata di isola per la prima colazione.',
          'Il mio appartamento è il punto di partenza ideale per vivere appieno la magica atmosfera del centro storico di Roma. Una zona sicura, a pochi minuti dal Vaticano e dalla caratteristica piazza Campo de Fiori ... una perla del folklore romano.Al momento del check-in vi sarà richiesto di pagare la tassa di soggiorno di Roma 3,50 euro per persona a notte + spese di pulizia di 50 euro. Avrò anche bisogno dei tuoi documenti per registrarti alla polizia locale, secondo la legge antiterrorismo.',
          'La loggia del Quirinale fa parte di un complesso residenziale di villini a schiera, un tempo laboratori di artigiani ed oggi riqualificati in piccoli loft di circa 60 m2. Il complesso residenziale, che vanta una posizione speciale nel cuore di San Lorenzo, si trova in un angolo del quartiere silenzioso e verdeggiante. Ogni loft è preceduto da una piccola terrazza privata dove è possibile rinfrescarsi con un aperitivo nelle calde serate romane. Il loft si sviluppa su tre livelli sovrapposti: al piano terra un ampio soggiorno con divano letto a due piazze, sala da pranzo, cucinino e bagno. Dal piano terra, una rampa di scale collega il soggiorno ad una luminosa ed ampia camera da letto con un piccolo balcone. Un\'altra rampa di scale scende dal soggiorno verso il piano interrato dove si trova un piccolo disimpegno allestito a guardaroba e lavanderia.',
          'Nella migliore posizione di Milano direttamente nel cuore del centro in Corso Vittorio Emanuele, a pochi passi da DUOMO Cattedrale (2 minuti a piedi) e tutti i maggiori punti di interesse.Lussuoso e luminoso appartamento arredato in stile moderno con: camera da letto, salotto, cucina , bagno ed una splendida veranda. Stabile con ascensore. Pulito e confortevole.',
          'Ottima Posizione: angolo di Via Montenapoleone la via più chic del quadrilatero della moda, a pochi passi da DUOMO (5 minuti) Cattedrale e nelle vicinanza della SCALA Splendido piccolo appartamento: camera da letto, bagno, cucina e salotto con luminosa veranda. Pulito e confortevole ',
          'Appartamento Loft appena fuori Zona Navigli con Cucina,Soggiorno,Bagno e un soppalco con un letto matrimoniale e un letto singolo per dormire. Il soggiorno è dotato di un grande e comodo divano che in emergenza può ospitare altre due persone, c’è anche un grande televisore per qualche ora di relax.',
          'La nostra casa è in perfetto stile toscano con i suoi mattoni a vista e il portone a vetri che si affaccia sul giardino. Situato nel cuore di Firenze, ma in una zona molto tranquilla, a pochi passi dal Duomo e dalla stazioneLa nostra casa è in perfetto stile Toscano! Si trova in una zona lussuosa dove molte famiglie ricche fiorentine vivevano e vivono tutto oggi. Piazza Indipendenza con il suo bel giardino è un luogo dove giovani e meno giovani si fermano per fare 2 chiacchiere, riposarsi o prendere un caffè. ',
          'Grazioso piccolo appartamento nella piazza del duomo con una terrazza panoramica che domina tutta la città. La posizione non potrebbe essere migliore. Nell\'appartamento troverai tutto il necessario per rendere il tuo soggiorno il più piacevole possibile, le spese di pulizia e la tassa di soggiorno sono incluse nel prezzo',
          'Il monolocale , che si trova al terzo piano di una piccola palazzina, è molto silenzioso e luminoso, e vi garantirà poi di riposare bene dopo le lunghe camminate nel centro storico pedonale presente nei dintorni.Arredamento nuovo, angolo cottura, Wi-Fi, aria condizionata e tutti i comfort necessari. Si trova al terzo piano di una piccola antica palazzina, SENZA ascensore.',
          'Questo nuovissimo appartamento è nel pieno centro di Napoli, a pochi minuti a piedi da tutte le attrazioni turistiche e dai tutti i mezzi pubblici: formato da camera da letto con letto matrimoniale, bagno con doccia e soggiorno con divano letto per 2.L\'appartamento è al quinto piano, non esiste ascensore.una perfetta base per visitare la città, esplorare le isole e i dintorni grazie alla vicinanza con porto stazione ferroviaria.',
          'Un luminoso attico vista mare e Vesuvio al centro di Napoli e molto vicino dal lungomare. Un terrazzo 600mq arredato e vista mare Wifi gratis, digitale terrestre sky, aria condizionata, microonde, cucina, macchina del caffè (cialde gratis), asciugamani e lenzuola, shampoo bagnoschiuma ping pong, area relax Il terrazzo privato ampio ed usato come solarium, ha vista sul mare e Vesuvio, circondato dal silenzio e diventa un posto ideale per cenare la sera in compagnia o godersi un piacevole colazione avvolto dal sole della citta',
          'Uno splendido rifugio nel cuore del centro antico di Napoli. Luminoso appartamento all\'interno di uno storico edificio, costruito nel 1470, nella caratteristica area di Spaccanapoli. La casa è dotata di un balcone che affaccia sul convento di San Gregorio Armeno, capolavoro dell\'arte barocca. Gli ospiti potranno godere della vista sulla famosa via san Gregorio Armeno e percepire l\'atmosfera della città.',
          'Bilocale in stabile d\'epoca stile Liberty in quartiere San Donato, a due passi dal Centro di Torino, servito da tutti i mezzi pubblici. A 5 minuti a piedi dalla fermata Bernini della Metropolitana e a 10 minuti da piazza Statuto.Sito al 4° piano senza ascensore dispone di: letto matrimoniale su soppalco calpestabile, ampia scrivania, zona giorno con divano letto per un adulto o due bambini, cucina completa, televisore con lettore Dvd e bagno attrezzato con tutti i servizi. Colazione inclusa.',
          'A pochi passi dalla stazione Porta Nuova un bellissimo e accogliente appartamento in un palazzo storico nel cuore della città di Torino.Dotato di divano-letto, cucina attrezzata, Smart TV HD da 47 pollici, internet wi-fi, bagno con doccia. Ottima vicinanza e accessibilità a svariati servizi quali metro, ristoranti, negozi ecc.',
          'Abitazione si trova di fronte la bellissima Villa Reale (con vista dal balcone), tra Porta Rudie e porta Napoli 2 tra le principali vie d\'accesso al centro storico e a soli 5 min dal Duomo di Lecce, dalla chiesa di Santa Croce e dai più famosi monumenti storici della città . Casa indipendente e di recente ristrutturazione.Nonostante si trovi alle porte del centro storico, è assicurata la privacy e la tranquillità.Facilmente raggiungibile per chi arriva in macchina da Brindisi e a 5 min a piedi dalla fermata del bus-navetta che collega la città con l\'aereoporto.',
          'Appartamento di nuova costruzione, ideale per due persone, luminosissimo e dotato di tutti i confort, è l\'ideale per soggiorni sia brevi che medio lunghi.Si trova a 10 minuti dal centro di Lecce e a 10 minuti dall\'imbocco della tangenziale.',
          'Uno spazio elegante per una vacanza romantica a Lecce! a pochi passi dalla strada principale della città, l\'appartamento si trova in un cortile tranquillo e tipico nel cuore del centro storico; Ha una grande terrazza e una piccola area esterna.L\'appartamento è un vecchio edificio recentemente ristrutturato giocando tra elementi tradizionali e colori contemporanei, dotato di comfort moderni.',
          'Immerso nel verde in zona silenziosissima, vicino ai grandi Outlet di Castel Romano e Valmontone (ca. 30 min).
          La struttura dista inoltre 30 min dal Parco attrazioni Rainbow Magicland, raggiungibile anche con auto dei proprietari (possibilità di affitto dell\'auto). A 15 min di strada è presente il Parco naturale di Ninfa e il paese medioevale di Sermoneta dove si può visitare il Castello Caetani, la zona dei laghi vulcanici (Castelgandolfo, Rocca di Papa,Nemi) e l\'Abbazia bizantina millenaria di Grottaferrata. A 15-20 min dal mare (Nettuno e Anzio).',
          'Appartamento centralissimo all\'EUR, in palazzina signorile, a due passi da tutte le comodità. Salotto con divano e tavolo per mangiare, una grande camera matrimoniale, una grande camera con un letto singolo con possibilità di aggiungere un secondo letto. Una cameretta con una scrivania per poter lavorare e un bagno con vasca, doccia e doppi lavandini.',
          'The apartment boasts an enviable central location in the heart of the historic "La Marina" of Cagliari, 150 meters from the Via Roma and the harbour, bus and train station and main shops. A 10-minute bus ride from the beautiful beach of Poetto. Outdoor restaurants, pubs,supermarket,ice cream parlour,bakeries artigianiali, rent bikes ... a few steps! The house is clean ( we reserve a particular attention to the cleaning) and recently (email hidden) has 2 double fully furnished rooms, each equipped with INTERNET WIFI.. LCD TV, temperature controlled, open space kitchen with an other flat TV on the wall and two comfortable chairs for relaxation. The kitchen is fully equipped with washing machine, bathroom with shower and terrace. Guests sheets, towels,beach towels and bag for the beach. Benvenuti! :-)'
        ],
        'address' => [
          'Via Orazio, 10 - Roma',
          'Piazza del Colosseo - Roma',
          'Rione Monti-Roma',
          'Viale Castro Pretorio, 5 - Roma',
          'Viale Giulio Cesare, 47 - Roma',
          'Via del Quirinale - Roma',
          'Via Senato, 10 - Milano',
          'Via Monte Napoleone - Milano',
          'Via Giulio Tarra, 1 - Milano ',
          'Piazza della Liberta, 20 -Firenze',
          'Via dell\' Oriuolo, 25 - Firenze',
          'Via Porta Rossa, 20 - Firenze',
          'Via Nuova Marina, 120 -Napoli',
          'Via Mergellina, 1- Napoli',
          'Via Eletto Starace, 2 - Napoli',
          'Corso Inghilterra, 35 -Torino',
          'Via Carlo Alberto, 3 - Torino',
          'Via Principi di Savoia, 3, Lecce',
          'Via Marco terenzio Varrone, 3 - Lecce',
          'Via Alessandro Volta Sn, -Lecce',
          'Via Regina Margherita, 12A - Velletri',
          'Viale America, 3 - Roma',
          'Via Sicilia, 27 - Cagliari'
        ],
        'cover_img' => [
          'storage/images/seed/001.jpeg',
          'storage/images/seed/002.jpeg',
          'storage/images/seed/003.jpeg',
          'storage/images/seed/004.jpeg',
          'storage/images/seed/005.jpeg',
          'storage/images/seed/006.jpeg',
          'storage/images/seed/007.jpeg',
          'storage/images/seed/008.jpeg',
          'storage/images/seed/009.jpeg',
          'storage/images/seed/010.jpeg',
          'storage/images/seed/011.jpeg',
          'storage/images/seed/012.jpeg',
          'storage/images/seed/013.jpeg',
          'storage/images/seed/014.jpeg',
          'storage/images/seed/015.jpeg',
          'storage/images/seed/016.jpeg',
          'storage/images/seed/017.jpeg',
          'storage/images/seed/021.jpeg',
          'storage/images/seed/012.jpeg',
          'storage/images/seed/001.jpeg',
          'storage/images/seed/019.jpg',
          'storage/images/seed/023.jpg',
          'storage/images/seed/027.jpg',

        ],
        'latitude' => [
          '41.90723',
          '41.88945',
          '41.89485',
          '41.90152',
          '41.911',
          '41.90175',
          '45.47007',
          '45.46817',
          '45.48691',
          '43.7835',
          '43.77219',
          '43.77025',
          '40.84606',
          '40.82361',
          '40.84728',
          '45.06947',
          '45.06957',
          '40.35634',
          '40.37829',
          '40.34407',
          '41.68436',
          '41.83174',
          '39.21527'
        ],
        'longitude' => [
          '12.46627',
          '12.49255',
          '12.49338',
          '12.50566',
          '12.46544',
          '12.49044',
          '9.19813',
          '9.19531',
          '9.20142',
          '11.26274',
          '11.25991',
          '11.25171',
          '14.26417',
          '14.21893',
          '14.26093',
          '7.66305',
          '7.68701',
          '18.16899',
          '18.19314',
          '18.14203',
          '12.77852',
          '12.46161',
          '9.11305'
        ],
      ];

      for ($i=0; $i < 23; $i++) {
        $newApartment = new Apartment;
        $newApartment->user_id = User::inRandomOrder()->first()->id;
        $newApartment->title = $apartmentTemplate['title'][$i];
        $newApartment->description = $apartmentTemplate['description'][$i];
        $newApartment->address = $apartmentTemplate['address'][$i];
        $newApartment->latitude = $apartmentTemplate['latitude'][$i];
        $newApartment->longitude = $apartmentTemplate['longitude'][$i];
        $newApartment->cover_img = $apartmentTemplate['cover_img'][$i];
        $newApartment->sq_meters = rand(20, 134);
        if ($newApartment->sq_meters < 50) {
          $newApartment->n_rooms = rand(1, floor($newApartment->sq_meters / 15));
        } elseif ($newApartment->sq_meters < 90) {
          $newApartment->n_rooms = rand(2, floor($newApartment->sq_meters / 15));
        } else {
          $newApartment->n_rooms = rand(3, floor($newApartment->sq_meters / 15));
        }
        if ($newApartment->n_rooms < 2) {
          $newApartment->n_baths = 1;
        } elseif ($newApartment->n_rooms < 4) {
          $newApartment->n_baths = rand(1, 2);;
        } else {
          $newApartment->n_baths = rand(floor($newApartment->n_rooms / 2), 4);
        }
        $newApartment->price = rand(25, 300);
        $newApartment->active = true;
        $newApartment->save();

        $services = Service::inRandomOrder()->take(rand(1,11))->get();

        $newApartment->services()->attach($services);

      }
    }
}
