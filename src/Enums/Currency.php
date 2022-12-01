<?php declare(strict_types=1);

namespace Ecode\Enums;

/**
 * List of ISO 4217 currencies codes
 * See more: https://en.wikipedia.org/wiki/ISO_4217
 */
enum Currency: string implements EnumContract
{
    case AED = 'AED';
    case AFN = 'AFN';
    case ALL = 'ALL';
    case AMD = 'AMD';
    case ANG = 'ANG';
    case AOA = 'AOA';
    case ARS = 'ARS';
    case AUD = 'AUD';
    case AWG = 'AWG';
    case AZN = 'AZN';
    case BAM = 'BAM';
    case BBD = 'BBD';
    case BDT = 'BDT';
    case BGN = 'BGN';
    case BHD = 'BHD';
    case BIF = 'BIF';
    case BMD = 'BMD';
    case BND = 'BND';
    case BOB = 'BOB';
    case BOV = 'BOV';
    case BRL = 'BRL';
    case BSD = 'BSD';
    case BTN = 'BTN';
    case BWP = 'BWP';
    case BYN = 'BYN';
    case BZD = 'BZD';
    case CAD = 'CAD';
    case CDF = 'CDF';
    case CHE = 'CHE';
    case CHF = 'CHF';
    case CHW = 'CHW';
    case CLF = 'CLF';
    case CLP = 'CLP';
    case COP = 'COP';
    case COU = 'COU';
    case CRC = 'CRC';
    case CUC = 'CUC';
    case CUP = 'CUP';
    case CVE = 'CVE';
    case CZK = 'CZK';
    case DJF = 'DJF';
    case DKK = 'DKK';
    case DOP = 'DOP';
    case DZD = 'DZD';
    case EGP = 'EGP';
    case ERN = 'ERN';
    case ETB = 'ETB';
    case EUR = 'EUR';
    case FJD = 'FJD';
    case FKP = 'FKP';
    case GBP = 'GBP';
    case GEL = 'GEL';
    case GHS = 'GHS';
    case GIP = 'GIP';
    case GMD = 'GMD';
    case GNF = 'GNF';
    case GTQ = 'GTQ';
    case GYD = 'GYD';
    case HKD = 'HKD';
    case HNL = 'HNL';
    case HRK = 'HRK';
    case HTG = 'HTG';
    case HUF = 'HUF';
    case IDR = 'IDR';
    case ILS = 'ILS';
    case INR = 'INR';
    case IQD = 'IQD';
    case IRR = 'IRR';
    case ISK = 'ISK';
    case JMD = 'JMD';
    case JOD = 'JOD';
    case JPY = 'JPY';
    case KES = 'KES';
    case KGS = 'KGS';
    case KHR = 'KHR';
    case KMF = 'KMF';
    case KPW = 'KPW';
    case KRW = 'KRW';
    case KWD = 'KWD';
    case KYD = 'KYD';
    case KZT = 'KZT';
    case LAK = 'LAK';
    case LBP = 'LBP';
    case LKR = 'LKR';
    case LRD = 'LRD';
    case LSL = 'LSL';
    case LYD = 'LYD';
    case MAD = 'MAD';
    case MDL = 'MDL';
    case MGA = 'MGA';
    case MKD = 'MKD';
    case MMK = 'MMK';
    case MNT = 'MNT';
    case MOP = 'MOP';
    case MRU = 'MRU';
    case MUR = 'MUR';
    case MVR = 'MVR';
    case MWK = 'MWK';
    case MXN = 'MXN';
    case MXV = 'MXV';
    case MYR = 'MYR';
    case MZN = 'MZN';
    case NAD = 'NAD';
    case NGN = 'NGN';
    case NIO = 'NIO';
    case NOK = 'NOK';
    case NPR = 'NPR';
    case NZD = 'NZD';
    case OMR = 'OMR';
    case PAB = 'PAB';
    case PEN = 'PEN';
    case PGK = 'PGK';
    case PHP = 'PHP';
    case PKR = 'PKR';
    case PLN = 'PLN';
    case PYG = 'PYG';
    case QAR = 'QAR';
    case RON = 'RON';
    case RSD = 'RSD';
    case CNY = 'CNY';
    case RUB = 'RUB';
    case RWF = 'RWF';
    case SAR = 'SAR';
    case SBD = 'SBD';
    case SCR = 'SCR';
    case SDG = 'SDG';
    case SEK = 'SEK';
    case SGD = 'SGD';
    case SHP = 'SHP';
    case SLE = 'SLE';
    case SLL = 'SLL';
    case SOS = 'SOS';
    case SRD = 'SRD';
    case SSP = 'SSP';
    case STN = 'STN';
    case SVC = 'SVC';
    case SYP = 'SYP';
    case SZL = 'SZL';
    case THB = 'THB';
    case TJS = 'TJS';
    case TMT = 'TMT';
    case TND = 'TND';
    case TOP = 'TOP';
    case TRY = 'TRY';
    case TTD = 'TTD';
    case TWD = 'TWD';
    case TZS = 'TZS';
    case UAH = 'UAH';
    case UGX = 'UGX';
    case USD = 'USD';
    case USN = 'USN';
    case UYI = 'UYI';
    case UYU = 'UYU';
    case UYW = 'UYW';
    case UZS = 'UZS';
    case VED = 'VED';
    case VES = 'VES';
    case VND = 'VND';
    case VUV = 'VUV';
    case WST = 'WST';
    case XAF = 'XAF';
    case XAG = 'XAG';
    case XAU = 'XAU';
    case XBA = 'XBA';
    case XBB = 'XBB';
    case XBC = 'XBC';
    case XBD = 'XBD';
    case XCD = 'XCD';
    case XDR = 'XDR';
    case XOF = 'XOF';
    case XPD = 'XPD';
    case XPF = 'XPF';
    case XPT = 'XPT';
    case XSU = 'XSU';
    case XTS = 'XTS';
    case XUA = 'XUA';
    case XXX = 'XXX';
    case YER = 'YER';
    case ZAR = 'ZAR';
    case ZMW = 'ZMW';
    case ZWL = 'ZWL';

    /**
     * @return array
     */
    public static function values(): array
    {
        return array_column(
            array: self::cases(),
            column_key: 'value'
        );
    }

    /**
     * @param mixed $value
     * @return ?self
     */
    public static function innFrom(mixed $value): ?self
    {
        if (is_null($value)) return null;
        return self::from($value);
    }

    /**
     * @return string
     */
    public function label(): string
    {
        return self::labels()[$this->value];
    }

    /**
     * @return string[]
     */
    public static function labels(): array
    {
        return [
            self::AED->value => 'United Arab Emirates dirham',
            self::AFN->value => 'Afghan afghani',
            self::ALL->value => 'Albanian lek',
            self::AMD->value => 'Armenian dram',
            self::ANG->value => 'Netherlands Antillean guilder',
            self::AOA->value => 'Angolan kwanza',
            self::ARS->value => 'Argentine peso',
            self::AUD->value => 'Australian dollar',
            self::AWG->value => 'Aruban florin',
            self::AZN->value => 'Azerbaijani manat',
            self::BAM->value => 'Bosnia and Herzegovina convertible mark',
            self::BBD->value => 'Barbados dollar',
            self::BDT->value => 'Bangladeshi taka',
            self::BGN->value => 'Bulgarian lev',
            self::BHD->value => 'Bahraini dinar',
            self::BIF->value => 'Burundian franc',
            self::BMD->value => 'Bermudian dollar',
            self::BND->value => 'Brunei dollar',
            self::BOB->value => 'Boliviano',
            self::BOV->value => 'Bolivian Mvdol (funds code)',
            self::BRL->value => 'Brazilian real',
            self::BSD->value => 'Bahamian dollar',
            self::BTN->value => 'Bhutanese ngultrum',
            self::BWP->value => 'Botswana pula',
            self::BYN->value => 'Belarusian ruble',
            self::BZD->value => 'Belize dollar',
            self::CAD->value => 'Canadian dollar',
            self::CDF->value => 'Congolese franc',
            self::CHE->value => 'WIR euro (complementary currency)',
            self::CHF->value => 'Swiss franc',
            self::CHW->value => 'WIR franc (complementary currency)',
            self::CLF->value => 'Unidad de Fomento (funds code)',
            self::CLP->value => 'Chilean peso',
            self::COP->value => 'Colombian peso',
            self::COU->value => 'Unidad de Valor Real (UVR) (funds code)',
            self::CRC->value => 'Costa Rican colon',
            self::CUC->value => 'Cuban convertible peso',
            self::CUP->value => 'Cuban peso',
            self::CVE->value => 'Cape Verdean escudo',
            self::CZK->value => 'Czech koruna',
            self::DJF->value => 'Djiboutian franc',
            self::DKK->value => 'Danish krone',
            self::DOP->value => 'Dominican peso',
            self::DZD->value => 'Algerian dinar',
            self::EGP->value => 'Egyptian pound',
            self::ERN->value => 'Eritrean nakfa',
            self::ETB->value => 'Ethiopian birr',
            self::EUR->value => 'Euro',
            self::FJD->value => 'Fiji dollar',
            self::FKP->value => 'Falkland Islands pound',
            self::GBP->value => 'Pound sterling',
            self::GEL->value => 'Georgian lari',
            self::GHS->value => 'Ghanaian cedi',
            self::GIP->value => 'Gibraltar pound',
            self::GMD->value => 'Gambian dalasi',
            self::GNF->value => 'Guinean franc',
            self::GTQ->value => 'Guatemalan quetzal',
            self::GYD->value => 'Guyanese dollar',
            self::HKD->value => 'Hong Kong dollar',
            self::HNL->value => 'Honduran lempira',
            self::HRK->value => 'Croatian kuna',
            self::HTG->value => 'Haitian gourde',
            self::HUF->value => 'Hungarian forint',
            self::IDR->value => 'Indonesian rupiah',
            self::ILS->value => 'Israeli new shekel',
            self::INR->value => 'Indian rupee',
            self::IQD->value => 'Iraqi dinar',
            self::IRR->value => 'Iranian rial',
            self::ISK->value => 'Icelandic króna (plural: krónur)',
            self::JMD->value => 'Jamaican dollar',
            self::JOD->value => 'Jordanian dinar',
            self::JPY->value => 'Japanese yen',
            self::KES->value => 'Kenyan shilling',
            self::KGS->value => 'Kyrgyzstani som',
            self::KHR->value => 'Cambodian riel',
            self::KMF->value => 'Comoro franc',
            self::KPW->value => 'North Korean won',
            self::KRW->value => 'South Korean won',
            self::KWD->value => 'Kuwaiti dinar',
            self::KYD->value => 'Cayman Islands dollar',
            self::KZT->value => 'Kazakhstani tenge',
            self::LAK->value => 'Lao kip',
            self::LBP->value => 'Lebanese pound',
            self::LKR->value => 'Sri Lankan rupee',
            self::LRD->value => 'Liberian dollar',
            self::LSL->value => 'Lesotho loti',
            self::LYD->value => 'Libyan dinar',
            self::MAD->value => 'Moroccan dirham',
            self::MDL->value => 'Moldovan leu',
            self::MGA->value => 'Malagasy ariary',
            self::MKD->value => 'Macedonian denar',
            self::MMK->value => 'Myanmar kyat',
            self::MNT->value => 'Mongolian tögrög',
            self::MOP->value => 'Macanese pataca',
            self::MRU->value => 'Mauritanian ouguiya',
            self::MUR->value => 'Mauritian rupee',
            self::MVR->value => 'Maldivian rufiyaa',
            self::MWK->value => 'Malawian kwacha',
            self::MXN->value => 'Mexican peso',
            self::MXV->value => 'Mexican Unidad de Inversion (UDI) (funds code)',
            self::MYR->value => 'Malaysian ringgit',
            self::MZN->value => 'Mozambican metical',
            self::NAD->value => 'Namibian dollar',
            self::NGN->value => 'Nigerian naira',
            self::NIO->value => 'Nicaraguan córdoba',
            self::NOK->value => 'Norwegian krone',
            self::NPR->value => 'Nepalese rupee',
            self::NZD->value => 'New Zealand dollar',
            self::OMR->value => 'Omani rial',
            self::PAB->value => 'Panamanian balboa',
            self::PEN->value => 'Peruvian sol',
            self::PGK->value => 'Papua New Guinean kina',
            self::PHP->value => 'Philippine peso',
            self::PKR->value => 'Pakistani rupee',
            self::PLN->value => 'Polish zloty',
            self::PYG->value => 'Paraguayan guaraní',
            self::QAR->value => 'Qatari riyal',
            self::RON->value => 'Romanian leu',
            self::RSD->value => 'Serbian dinar',
            self::CNY->value => 'Renminbi',
            self::RUB->value => 'Russian ruble',
            self::RWF->value => 'Rwandan franc',
            self::SAR->value => 'Saudi riyal',
            self::SBD->value => 'Solomon Islands dollar',
            self::SCR->value => 'Seychelles rupee',
            self::SDG->value => 'Sudanese pound',
            self::SEK->value => 'Swedish krona (plural: kronor)',
            self::SGD->value => 'Singapore dollar',
            self::SHP->value => 'Saint Helena pound',
            self::SLE->value => 'Sierra Leonean leone (new leone)',
            self::SLL->value => 'Sierra Leonean leone (old leone)',
            self::SOS->value => 'Somali shilling',
            self::SRD->value => 'Surinamese dollar',
            self::SSP->value => 'South Sudanese pound',
            self::STN->value => 'São Tomé and Príncipe dobra',
            self::SVC->value => 'Salvadoran colón',
            self::SYP->value => 'Syrian pound',
            self::SZL->value => 'Swazi lilangeni',
            self::THB->value => 'Thai baht',
            self::TJS->value => 'Tajikistani somoni',
            self::TMT->value => 'Turkmenistan manat',
            self::TND->value => 'Tunisian dinar',
            self::TOP->value => 'Tongan pa\'anga',
            self::TRY->value => 'Turkish lira',
            self::TTD->value => 'Trinidad and Tobago dollar',
            self::TWD->value => 'New Taiwan dollar',
            self::TZS->value => 'Tanzanian shilling',
            self::UAH->value => 'Ukrainian hryvnia',
            self::UGX->value => 'Ugandan shilling',
            self::USD->value => 'United States dollar',
            self::USN->value => 'United States dollar (next day) (funds code)',
            self::UYI->value => 'Uruguay Peso en Unidades Indexadas (URUIURUI) (funds code)',
            self::UYU->value => 'Uruguayan peso',
            self::UYW->value => 'Unidad previsional',
            self::UZS->value => 'Uzbekistan sum',
            self::VED->value => 'Venezuelan digital bolívar',
            self::VES->value => 'Venezuelan sovereign bolívar',
            self::VND->value => 'Vietnamese dong',
            self::VUV->value => 'Vanuatu vatu',
            self::WST->value => 'Samoan tala',
            self::XAF->value => 'CFA franc BEAC',
            self::XAG->value => 'Silver (one troy ounce)',
            self::XAU->value => 'Gold (one troy ounce)',
            self::XBA->value => 'European Composite Unit (EURCO) (bond market unit)',
            self::XBB->value => 'European Monetary Unit (E.M.U.-6) (bond market unit)',
            self::XBC->value => 'European Unit of Account 9 (E.U.A.-9) (bond market unit)',
            self::XBD->value => 'European Unit of Account 17 (E.U.A.-17) (bond market unit)',
            self::XCD->value => 'East Caribbean dollar',
            self::XDR->value => 'Special drawing rights',
            self::XOF->value => 'CFA franc BCEAO',
            self::XPD->value => 'Palladium (one troy ounce)',
            self::XPF->value => 'CFP franc (franc Pacifique)',
            self::XPT->value => 'Platinum (one troy ounce)',
            self::XSU->value => 'SUCRE',
            self::XTS->value => 'Code reserved for testing',
            self::XUA->value => 'ADB Unit of Account',
            self::XXX->value => 'No currency',
            self::YER->value => 'Yemeni rial',
            self::ZAR->value => 'South African rand',
            self::ZMW->value => 'Zambian kwacha',
            self::ZWL->value => 'Zimbabwean dollar',
        ];
    }
}
