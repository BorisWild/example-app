"use client"

import {BellIcon, PlusSquareIcon, Search2Icon, SettingsIcon, StarIcon, TimeIcon} from "@chakra-ui/icons";


interface ISidebarItem{
    route?: string;
    label:string;
    icon?: any;
}
interface ISidebarItemDocument{
    route?: string;
    label:string;
    icon?: any;
}

export default function Sidebar(){

    const SidebarItem = ( item: ISidebarItem ) => {

        return (
            <div className={'w-full flex text-gray-600 py-1 px-2 text-sm items-center hover:bg-gray-200 transition-[2s] rounded cursor-pointer'}>

                {
                    item?.icon ? (
                        <div className={'mr-2 mt-[-3px]'}>{item?.icon}</div>
                    ) : ''
                }
                <span>{item.label}</span>
            </div>
        )

    }

    const sidebarItemsMain : ISidebarItem[]  = [
        {
            label: 'Home',
            icon: <StarIcon className={'w-[0.875rem]'} />
        },
        {
            label: 'Search',
            icon: <Search2Icon className={'w-[0.875rem]'} />
        },
        {
            label: 'Updates',
            icon: <TimeIcon className={'w-[0.875rem]'} />
        },
        {
            label: 'Settings',
            icon: <SettingsIcon className={'w-[0.875rem]'} />
        },
    ];

    const sidebarItemsDocuments : ISidebarItemDocument[] = [
        {
            label: 'My homework',
        },
        {
            label: 'Docs by father',
        },
        {
            label: 'Criminal Code',
        },
        {
            label: 'Others',
        },
    ]

    return (
        <div className={'min-w-[14rem] w-[14rem] bg-neutral-100 border-r-[1px] border-solid border-gray-200'}>
            <div className={'px-2'}>
                <div className={'py-5'}>
                    {
                        sidebarItemsMain && sidebarItemsMain.map( (item, index) => <SidebarItem {...item} key={`sidebarItemsMain-${index}`} /> )
                    }
                </div>
                <div className={'py-5'}>
                    <div className={'ml-2 text-xs text-gray-500 font-bold mb-1 flex justify-between items-center'}>
                        <div>
                            Documents
                        </div>
                        <div className={'p-[2px] hover:bg-gray-200 cursor-pointer transition-[2s] rounded'}>
                            <PlusSquareIcon className={'w-[1rem] h-[1rem]'} />
                        </div>
                    </div>
                    {
                        sidebarItemsDocuments && sidebarItemsDocuments.map( (item, index) => <SidebarItem {...item} key={`sidebarItemsMain-${index}`} /> )
                    }
                </div>
                <div className={'py-5'}>
                    <div className={'ml-2 text-xs text-gray-500 font-bold mb-1 flex justify-between items-center'}>
                        <div className={'flex items-center'}>
                            <StarIcon className={'w-[0.875rem] mr-1 text-yellow-500 mt-[-1px]'} />
                            <span>Favorites</span>
                        </div>
                    </div>
                    {
                        sidebarItemsDocuments && sidebarItemsDocuments.map( (item, index) => <SidebarItem {...item} key={`sidebarItemsMain-${index}`} /> )
                    }
                </div>
            </div>

        </div>
    )

}