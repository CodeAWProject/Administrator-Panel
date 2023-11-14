<x-layout>
    <div class="flex max-h-full">
        <x-navbar>
        </x-navbar>
        <x-top-nav-bar>

            <div>
                <div class="flex gap-2">
                    <div>
                        <h3>Bedrijfsnaam</h3>
                    </div>
                    <div>
                        <p>{{auth()->user()->company->company_name}}</p>
                    </div>
                </div>
    
                
                <div class="flex gap-2">
                    <div>
                        <h3>Rechtsvorm</h3>
                    </div>
                    <div>
                        <p>{{auth()->user()->company->company_legal_form}}</p>
                    </div>
                </div>
    
                <div class="flex gap-2">
                    <div>
                        <h3>Adres</h3>
                    </div>
                    <div>
                        <p>{{auth()->user()->company->adres_line}}</p>
                        <p>{{auth()->user()->company->post_code}}</p>
                        <p>{{auth()->user()->company->country}}</p>
                    </div>
                </div>
    
                <div class="flex gap-2">
                    <div>
                        <h3>KVK-nummer</h3>
                    </div>
                    <div>
                        <p>{{auth()->user()->company->kvk_nummer}}</p>
                    </div>
                </div>
                
    
                <div class="flex gap-2">
                    <div>
                        <h3>Btw-identificatienummer</h3>
                    </div>
                    <div>
                        <p>{{auth()->user()->company->btw_id}}</p>
                    </div>
                </div>
                
                
                <div class="flex gap-2">
                    <div>
                        <h3>Bankrekening</h3>
                    </div>
                    <div>
                        <p>{{auth()->user()->company->bank_account}}</p>
                    </div>
                </div>

                <div>
                    <a href="{{route('company.edit', auth()->user()->company->id)}}">Bewerken</a>
                </div>
            </div>

            
                       
        </x-top-nav-bar>
    
        
    </div>


</x-layout>
