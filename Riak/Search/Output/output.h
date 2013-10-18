/*
   Copyright 2013 Kaspar Bach Pedersen

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

     http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
*/

#ifndef RIAK_SEARCH__OUTPUT__OUTPUT__H__
#define RIAK_SEARCH__OUTPUT__OUTPUT__H__

extern zend_class_entry *riak_search_output_ce;

void riak_search_output_output_init(TSRMLS_D);

/* Riak\Search\Output\Output */
PHP_METHOD(Riak_Search_Output_Output, hasMaxScore);
PHP_METHOD(Riak_Search_Output_Output, getMaxScore);
PHP_METHOD(Riak_Search_Output_Output, hasNumFound);
PHP_METHOD(Riak_Search_Output_Output, getNumFound);
PHP_METHOD(Riak_Search_Output_Output, getDocuments);

#endif // RIAK_SEARCH__OUTPUT__OUTPUT__H__
