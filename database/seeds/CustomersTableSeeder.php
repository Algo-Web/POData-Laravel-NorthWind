<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'company' => 'Company A',
                'last_name' => 'Bedecs',
                'first_name' => 'Anna',
                'email_address' => null,
                'job_title' => 'Owner',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 1st Street',
                'city' => 'Seattle',
                'state_province' => 'WA',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            1 =>
            array (
                'id' => 2,
                'company' => 'Company B',
                'last_name' => 'Gratacos Solsona',
                'first_name' => 'Antonio',
                'email_address' => null,
                'job_title' => 'Owner',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 2nd Street',
                'city' => 'Boston',
                'state_province' => 'MA',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            2 =>
            array (
                'id' => 3,
                'company' => 'Company C',
                'last_name' => 'Axen',
                'first_name' => 'Thomas',
                'email_address' => null,
                'job_title' => 'Purchasing Representative',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 3rd Street',
                'city' => 'Los Angelas',
                'state_province' => 'CA',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            3 =>
            array (
                'id' => 4,
                'company' => 'Company D',
                'last_name' => 'Lee',
                'first_name' => 'Christina',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 4th Street',
                'city' => 'New York',
                'state_province' => 'NY',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            4 =>
            array (
                'id' => 5,
                'company' => 'Company E',
                'last_name' => 'O’Donnell',
                'first_name' => 'Martin',
                'email_address' => null,
                'job_title' => 'Owner',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 5th Street',
                'city' => 'Minneapolis',
                'state_province' => 'MN',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            5 =>
            array (
                'id' => 6,
                'company' => 'Company F',
                'last_name' => 'Pérez-Olaeta',
                'first_name' => 'Francisco',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 6th Street',
                'city' => 'Milwaukee',
                'state_province' => 'WI',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            6 =>
            array (
                'id' => 7,
                'company' => 'Company G',
                'last_name' => 'Xie',
                'first_name' => 'Ming-Yang',
                'email_address' => null,
                'job_title' => 'Owner',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 7th Street',
                'city' => 'Boise',
                'state_province' => 'ID',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            7 =>
            array (
                'id' => 8,
                'company' => 'Company H',
                'last_name' => 'Andersen',
                'first_name' => 'Elizabeth',
                'email_address' => null,
                'job_title' => 'Purchasing Representative',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 8th Street',
                'city' => 'Portland',
                'state_province' => 'OR',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            8 =>
            array (
                'id' => 9,
                'company' => 'Company I',
                'last_name' => 'Mortensen',
                'first_name' => 'Sven',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 9th Street',
                'city' => 'Salt Lake City',
                'state_province' => 'UT',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            9 =>
            array (
                'id' => 10,
                'company' => 'Company J',
                'last_name' => 'Wacker',
                'first_name' => 'Roland',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 10th Street',
                'city' => 'Chicago',
                'state_province' => 'IL',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            10 =>
            array (
                'id' => 11,
                'company' => 'Company K',
                'last_name' => 'Krschne',
                'first_name' => 'Peter',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 11th Street',
                'city' => 'Miami',
                'state_province' => 'FL',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            11 =>
            array (
                'id' => 12,
                'company' => 'Company L',
                'last_name' => 'Edwards',
                'first_name' => 'John',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '123 12th Street',
                'city' => 'Las Vegas',
                'state_province' => 'NV',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            12 =>
            array (
                'id' => 13,
                'company' => 'Company M',
                'last_name' => 'Ludick',
                'first_name' => 'Andre',
                'email_address' => null,
                'job_title' => 'Purchasing Representative',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '456 13th Street',
                'city' => 'Memphis',
                'state_province' => 'TN',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            13 =>
            array (
                'id' => 14,
                'company' => 'Company N',
                'last_name' => 'Grilo',
                'first_name' => 'Carlos',
                'email_address' => null,
                'job_title' => 'Purchasing Representative',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '456 14th Street',
                'city' => 'Denver',
                'state_province' => 'CO',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            14 =>
            array (
                'id' => 15,
                'company' => 'Company O',
                'last_name' => 'Kupkova',
                'first_name' => 'Helena',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '456 15th Street',
                'city' => 'Honolulu',
                'state_province' => 'HI',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            15 =>
            array (
                'id' => 16,
                'company' => 'Company P',
                'last_name' => 'Goldschmidt',
                'first_name' => 'Daniel',
                'email_address' => null,
                'job_title' => 'Purchasing Representative',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '456 16th Street',
                'city' => 'San Francisco',
                'state_province' => 'CA',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            16 =>
            array (
                'id' => 17,
                'company' => 'Company Q',
                'last_name' => 'Bagel',
                'first_name' => 'Jean Philippe',
                'email_address' => null,
                'job_title' => 'Owner',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '456 17th Street',
                'city' => 'Seattle',
                'state_province' => 'WA',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            17 =>
            array (
                'id' => 18,
                'company' => 'Company R',
                'last_name' => 'Autier Miconi',
                'first_name' => 'Catherine',
                'email_address' => null,
                'job_title' => 'Purchasing Representative',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '456 18th Street',
                'city' => 'Boston',
                'state_province' => 'MA',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            18 =>
            array (
                'id' => 19,
                'company' => 'Company S',
                'last_name' => 'Eggerer',
                'first_name' => 'Alexander',
                'email_address' => null,
                'job_title' => 'Accounting Assistant',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 19th Street',
                'city' => 'Los Angelas',
                'state_province' => 'CA',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            19 =>
            array (
                'id' => 20,
                'company' => 'Company T',
                'last_name' => 'Li',
                'first_name' => 'George',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 20th Street',
                'city' => 'New York',
                'state_province' => 'NY',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            20 =>
            array (
                'id' => 21,
                'company' => 'Company U',
                'last_name' => 'Tham',
                'first_name' => 'Bernard',
                'email_address' => null,
                'job_title' => 'Accounting Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 21th Street',
                'city' => 'Minneapolis',
                'state_province' => 'MN',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            21 =>
            array (
                'id' => 22,
                'company' => 'Company V',
                'last_name' => 'Ramos',
                'first_name' => 'Luciana',
                'email_address' => null,
                'job_title' => 'Purchasing Assistant',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 22th Street',
                'city' => 'Milwaukee',
                'state_province' => 'WI',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            22 =>
            array (
                'id' => 23,
                'company' => 'Company W',
                'last_name' => 'Entin',
                'first_name' => 'Michael',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 23th Street',
                'city' => 'Portland',
                'state_province' => 'OR',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            23 =>
            array (
                'id' => 24,
                'company' => 'Company X',
                'last_name' => 'Hasselberg',
                'first_name' => 'Jonas',
                'email_address' => null,
                'job_title' => 'Owner',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 24th Street',
                'city' => 'Salt Lake City',
                'state_province' => 'UT',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            24 =>
            array (
                'id' => 25,
                'company' => 'Company Y',
                'last_name' => 'Rodman',
                'first_name' => 'John',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 25th Street',
                'city' => 'Chicago',
                'state_province' => 'IL',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            25 =>
            array (
                'id' => 26,
                'company' => 'Company Z',
                'last_name' => 'Liu',
                'first_name' => 'Run',
                'email_address' => null,
                'job_title' => 'Accounting Assistant',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 26th Street',
                'city' => 'Miami',
                'state_province' => 'FL',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            26 =>
            array (
                'id' => 27,
                'company' => 'Company AA',
                'last_name' => 'Toh',
                'first_name' => 'Karen',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 27th Street',
                'city' => 'Las Vegas',
                'state_province' => 'NV',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            27 =>
            array (
                'id' => 28,
                'company' => 'Company BB',
                'last_name' => 'Raghav',
                'first_name' => 'Amritansh',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 28th Street',
                'city' => 'Memphis',
                'state_province' => 'TN',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
            28 =>
            array (
                'id' => 29,
                'company' => 'Company CC',
                'last_name' => 'Lee',
                'first_name' => 'Soo Jung',
                'email_address' => null,
                'job_title' => 'Purchasing Manager',
            'business_phone' => '(123)555-0100',
                'home_phone' => null,
                'mobile_phone' => null,
            'fax_number' => '(123)555-0101',
                'address' => '789 29th Street',
                'city' => 'Denver',
                'state_province' => 'CO',
                'zip_postal_code' => '99999',
                'country_region' => 'USA',
                'web_page' => null,
                'notes' => null,
                'attachments' => '',
            ),
        ));
    }
}
